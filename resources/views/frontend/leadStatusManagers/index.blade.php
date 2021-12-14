@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('lead_status_manager_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.lead-status-managers.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.leadStatusManager.title_singular') }}
                        </a>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                            {{ trans('global.app_csvImport') }}
                        </button>
                        @include('csvImport.modal', ['model' => 'LeadStatusManager', 'route' => 'admin.lead-status-managers.parseCsvImport'])
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.leadStatusManager.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-LeadStatusManager">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.leadStatusManager.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.leadStatusManager.fields.is_active') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.leadStatusManager.fields.lead_status') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.leadStatusManager.fields.activity_result') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($leadStatusManagers as $key => $leadStatusManager)
                                    <tr data-entry-id="{{ $leadStatusManager->id }}">
                                        <td>
                                            {{ $leadStatusManager->id ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $leadStatusManager->is_active ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $leadStatusManager->is_active ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            {{ $leadStatusManager->lead_status->lead_stat ?? '' }}
                                        </td>
                                        <td>
                                            @foreach($leadStatusManager->activity_results as $key => $item)
                                                <span>{{ $item->result }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            @can('lead_status_manager_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.lead-status-managers.show', $leadStatusManager->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('lead_status_manager_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.lead-status-managers.edit', $leadStatusManager->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('lead_status_manager_delete')
                                                <form action="{{ route('frontend.lead-status-managers.destroy', $leadStatusManager->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('lead_status_manager_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.lead-status-managers.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  });
  let table = $('.datatable-LeadStatusManager:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
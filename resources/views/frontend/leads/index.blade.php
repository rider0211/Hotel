@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('lead_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.leads.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.lead.title_singular') }}
                        </a>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                            {{ trans('global.app_csvImport') }}
                        </button>
                        @include('csvImport.modal', ['model' => 'Lead', 'route' => 'admin.leads.parseCsvImport'])
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.lead.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Lead">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.first_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.last_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.email_2') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.phone') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.phone_2') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.description') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.homephone') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.goog_address') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_lon') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_lat') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_street') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_lot') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_city') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_state') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_zip') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_county') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.lead.fields.dateassigned') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($leads as $key => $lead)
                                    <tr data-entry-id="{{ $lead->id }}">
                                        <td>
                                            {{ $lead->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->first_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->last_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->email_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->phone_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->description ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->homephone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->goog_address ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->lead_lon ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->lead_lat ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->lead_street ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->lead_lot ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->lead_city ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->lead_state ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->lead_zip ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->lead_county ?? '' }}
                                        </td>
                                        <td>
                                            {{ $lead->dateassigned ?? '' }}
                                        </td>
                                        <td>
                                            @can('lead_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.leads.show', $lead->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('lead_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.leads.edit', $lead->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('lead_delete')
                                                <form action="{{ route('frontend.leads.destroy', $lead->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('lead_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.leads.massDestroy') }}",
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
  let table = $('.datatable-Lead:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection
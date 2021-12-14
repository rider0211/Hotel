@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('estimate_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.estimates.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.estimate.title_singular') }}
                        </a>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                            {{ trans('global.app_csvImport') }}
                        </button>
                        @include('csvImport.modal', ['model' => 'Estimate', 'route' => 'admin.estimates.parseCsvImport'])
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.estimate.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Estimate">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_stat') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_state') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_county') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_total_before_tax') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_state_tax') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_county_tax') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_total_after_tax') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.dep_calc_1') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.dep_calc_2') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.dep_calc_3') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_desposit_1') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_desposit_2') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_deposit_3') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_view_price') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_view_qty') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_view_detail') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_access') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_cust_email_signed') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_cust_first_signed') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_cust_last_signed') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_sign') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_sign_int') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_approve_date') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_user_ip') }}
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
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Estimate::EST_STATE_SELECT as $key => $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Estimate::EST_COUNTY_SELECT as $key => $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
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
                                    <td>
                                    </td>
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
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($estimates as $key => $estimate)
                                    <tr data-entry-id="{{ $estimate->id }}">
                                        <td>
                                            {{ $estimate->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_stat ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Estimate::EST_STATE_SELECT[$estimate->est_state] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Estimate::EST_COUNTY_SELECT[$estimate->est_county] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_total_before_tax ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_state_tax ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_county_tax ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_total_after_tax ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->dep_calc_1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->dep_calc_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->dep_calc_3 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_desposit_1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_desposit_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_deposit_3 ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $estimate->est_view_price ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $estimate->est_view_price ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $estimate->est_view_qty ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $estimate->est_view_qty ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $estimate->est_view_detail ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $estimate->est_view_detail ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            {{ $estimate->est_access ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_cust_email_signed ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_cust_first_signed ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_cust_last_signed ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_sign ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_sign_int ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_approve_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimate->est_user_ip ?? '' }}
                                        </td>
                                        <td>
                                            @can('estimate_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.estimates.show', $estimate->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('estimate_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.estimates.edit', $estimate->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('estimate_delete')
                                                <form action="{{ route('frontend.estimates.destroy', $estimate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('estimate_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.estimates.massDestroy') }}",
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
  let table = $('.datatable-Estimate:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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
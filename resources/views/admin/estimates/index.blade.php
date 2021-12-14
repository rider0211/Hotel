@extends('layouts.admin')
@section('content')
@can('estimate_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.estimates.create') }}">
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
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Estimate">
            <thead>
                <tr>
                    <th width="10">

                    </th>
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
                                <option value="{{ $key }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="search" strict="true">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach(App\Models\Estimate::EST_COUNTY_SELECT as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
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
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('estimate_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.estimates.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.estimates.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'est_stat', name: 'est_stat' },
{ data: 'est_state', name: 'est_state' },
{ data: 'est_county', name: 'est_county' },
{ data: 'est_total_before_tax', name: 'est_total_before_tax' },
{ data: 'est_state_tax', name: 'est_state_tax' },
{ data: 'est_county_tax', name: 'est_county_tax' },
{ data: 'est_total_after_tax', name: 'est_total_after_tax' },
{ data: 'dep_calc_1', name: 'dep_calc_1' },
{ data: 'dep_calc_2', name: 'dep_calc_2' },
{ data: 'dep_calc_3', name: 'dep_calc_3' },
{ data: 'est_desposit_1', name: 'est_desposit_1' },
{ data: 'est_desposit_2', name: 'est_desposit_2' },
{ data: 'est_deposit_3', name: 'est_deposit_3' },
{ data: 'est_view_price', name: 'est_view_price' },
{ data: 'est_view_qty', name: 'est_view_qty' },
{ data: 'est_view_detail', name: 'est_view_detail' },
{ data: 'est_access', name: 'est_access' },
{ data: 'est_cust_email_signed', name: 'est_cust_email_signed' },
{ data: 'est_cust_first_signed', name: 'est_cust_first_signed' },
{ data: 'est_cust_last_signed', name: 'est_cust_last_signed' },
{ data: 'est_sign', name: 'est_sign' },
{ data: 'est_sign_int', name: 'est_sign_int' },
{ data: 'est_approve_date', name: 'est_approve_date' },
{ data: 'est_user_ip', name: 'est_user_ip' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  };
  let table = $('.datatable-Estimate').DataTable(dtOverrideGlobals);
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
});

</script>
@endsection
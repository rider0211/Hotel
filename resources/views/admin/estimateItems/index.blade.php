@extends('layouts.admin')
@section('content')
@can('estimate_item_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.estimate-items.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.estimateItem.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'EstimateItem', 'route' => 'admin.estimate-items.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.estimateItem.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-EstimateItem">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.item_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.item_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.est_item_quantity') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.est_item_price') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.est_item_final_amount') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.est_item_listprice') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.est_item_venfactor') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.est_item_factor_2') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.est_item_factor_3') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.est_item_margin') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.est_item_cost') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.est_item_profit') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.est_private_detail') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.est_extenditem_detail') }}
                    </th>
                    <th>
                        {{ trans('cruds.estimateItem.fields.est_price_detail') }}
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
@can('estimate_item_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.estimate-items.massDestroy') }}",
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
    ajax: "{{ route('admin.estimate-items.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'item_code', name: 'item_code' },
{ data: 'item_name', name: 'item_name' },
{ data: 'est_item_quantity', name: 'est_item_quantity' },
{ data: 'est_item_price', name: 'est_item_price' },
{ data: 'est_item_final_amount', name: 'est_item_final_amount' },
{ data: 'est_item_listprice', name: 'est_item_listprice' },
{ data: 'est_item_venfactor', name: 'est_item_venfactor' },
{ data: 'est_item_factor_2', name: 'est_item_factor_2' },
{ data: 'est_item_factor_3', name: 'est_item_factor_3' },
{ data: 'est_item_margin', name: 'est_item_margin' },
{ data: 'est_item_cost', name: 'est_item_cost' },
{ data: 'est_item_profit', name: 'est_item_profit' },
{ data: 'est_private_detail', name: 'est_private_detail' },
{ data: 'est_extenditem_detail', name: 'est_extenditem_detail' },
{ data: 'est_price_detail', name: 'est_price_detail' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  };
  let table = $('.datatable-EstimateItem').DataTable(dtOverrideGlobals);
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
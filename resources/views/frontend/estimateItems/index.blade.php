@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('estimate_item_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.estimate-items.create') }}">
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
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-EstimateItem">
                            <thead>
                                <tr>
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
                            <tbody>
                                @foreach($estimateItems as $key => $estimateItem)
                                    <tr data-entry-id="{{ $estimateItem->id }}">
                                        <td>
                                            {{ $estimateItem->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->item_code ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->item_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->est_item_quantity ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->est_item_price ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->est_item_final_amount ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->est_item_listprice ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->est_item_venfactor ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->est_item_factor_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->est_item_factor_3 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->est_item_margin ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->est_item_cost ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->est_item_profit ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->est_private_detail ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->est_extenditem_detail ?? '' }}
                                        </td>
                                        <td>
                                            {{ $estimateItem->est_price_detail ?? '' }}
                                        </td>
                                        <td>
                                            @can('estimate_item_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.estimate-items.show', $estimateItem->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('estimate_item_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.estimate-items.edit', $estimateItem->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('estimate_item_delete')
                                                <form action="{{ route('frontend.estimate-items.destroy', $estimateItem->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('estimate_item_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.estimate-items.massDestroy') }}",
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
  let table = $('.datatable-EstimateItem:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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
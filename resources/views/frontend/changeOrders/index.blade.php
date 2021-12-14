@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('change_order_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.change-orders.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.changeOrder.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.changeOrder.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-ChangeOrder">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_title') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_stat') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_state') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_county') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_total_before_tax') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_state_tax') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_county_tax') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_total_after_tax') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.dep_calc_1') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.dep_calc_2') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.dep_calc_3') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_desposit_1') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_desposit_2') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_deposit_3') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_view_price') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_view_qty') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_view_detail') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_access') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_cust_email_signed') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_cust_first_signed') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_cust_last_signed') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_sign') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_sign_int') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_approve_date') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.changeOrder.fields.est_user_ip') }}
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
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\ChangeOrder::EST_STATE_SELECT as $key => $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\ChangeOrder::EST_COUNTY_SELECT as $key => $item)
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
                                @foreach($changeOrders as $key => $changeOrder)
                                    <tr data-entry-id="{{ $changeOrder->id }}">
                                        <td>
                                            {{ $changeOrder->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_title ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_stat ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\ChangeOrder::EST_STATE_SELECT[$changeOrder->est_state] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\ChangeOrder::EST_COUNTY_SELECT[$changeOrder->est_county] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_total_before_tax ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_state_tax ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_county_tax ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_total_after_tax ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->dep_calc_1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->dep_calc_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->dep_calc_3 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_desposit_1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_desposit_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_deposit_3 ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $changeOrder->est_view_price ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $changeOrder->est_view_price ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $changeOrder->est_view_qty ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $changeOrder->est_view_qty ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $changeOrder->est_view_detail ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $changeOrder->est_view_detail ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_access ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_cust_email_signed ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_cust_first_signed ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_cust_last_signed ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_sign ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_sign_int ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_approve_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $changeOrder->est_user_ip ?? '' }}
                                        </td>
                                        <td>
                                            @can('change_order_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.change-orders.show', $changeOrder->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('change_order_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.change-orders.edit', $changeOrder->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('change_order_delete')
                                                <form action="{{ route('frontend.change-orders.destroy', $changeOrder->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('change_order_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.change-orders.massDestroy') }}",
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
  let table = $('.datatable-ChangeOrder:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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
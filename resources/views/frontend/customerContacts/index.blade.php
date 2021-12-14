@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('customer_contact_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.customer-contacts.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.customerContact.title_singular') }}
                        </a>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                            {{ trans('global.app_csvImport') }}
                        </button>
                        @include('csvImport.modal', ['model' => 'CustomerContact', 'route' => 'admin.customer-contacts.parseCsvImport'])
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.customerContact.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-CustomerContact">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.id_cust_status') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_status') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_fullname') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_title') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_vet') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.ms_primary_email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.ms_secondary_email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_email_2') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_phone') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_phone_2') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.ms_phone') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_fax') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.ms_address') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_address') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_route') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_city') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_state') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_zip') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_county') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_lat') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_lon') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.customerContact.fields.cust_note') }}
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
                                        <select class="search">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach($customer_statuses as $key => $item)
                                                <option value="{{ $item->cs_status }}">{{ $item->cs_status }}</option>
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
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\CustomerContact::CUST_VET_SELECT as $key => $item)
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
                                @foreach($customerContacts as $key => $customerContact)
                                    <tr data-entry-id="{{ $customerContact->id }}">
                                        <td>
                                            {{ $customerContact->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->id_cust_status ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_status->cs_status ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_fullname ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_title ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\CustomerContact::CUST_VET_SELECT[$customerContact->cust_vet] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->ms_primary_email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->ms_secondary_email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_email_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_phone_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->ms_phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_fax ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->ms_address ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_address ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_route ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_city ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_state ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_zip ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_county ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_lat ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_lon ?? '' }}
                                        </td>
                                        <td>
                                            {{ $customerContact->cust_note ?? '' }}
                                        </td>
                                        <td>
                                            @can('customer_contact_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.customer-contacts.show', $customerContact->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('customer_contact_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.customer-contacts.edit', $customerContact->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('customer_contact_delete')
                                                <form action="{{ route('frontend.customer-contacts.destroy', $customerContact->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('customer_contact_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.customer-contacts.massDestroy') }}",
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
  let table = $('.datatable-CustomerContact:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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
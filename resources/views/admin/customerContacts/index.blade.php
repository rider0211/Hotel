@extends('layouts.admin')
@section('content')
@can('customer_contact_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.customer-contacts.create') }}">
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
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-CustomerContact">
            <thead>
                <tr>
                    <th width="10">

                    </th>
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
@can('customer_contact_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.customer-contacts.massDestroy') }}",
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
    ajax: "{{ route('admin.customer-contacts.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'id_cust_status', name: 'id_cust_status' },
{ data: 'cust_status_cs_status', name: 'cust_status.cs_status' },
{ data: 'cust_fullname', name: 'cust_fullname' },
{ data: 'cust_title', name: 'cust_title' },
{ data: 'cust_vet', name: 'cust_vet' },
{ data: 'cust_email', name: 'cust_email' },
{ data: 'ms_primary_email', name: 'ms_primary_email' },
{ data: 'ms_secondary_email', name: 'ms_secondary_email' },
{ data: 'cust_email_2', name: 'cust_email_2' },
{ data: 'cust_phone', name: 'cust_phone' },
{ data: 'cust_phone_2', name: 'cust_phone_2' },
{ data: 'ms_phone', name: 'ms_phone' },
{ data: 'cust_fax', name: 'cust_fax' },
{ data: 'ms_address', name: 'ms_address' },
{ data: 'cust_address', name: 'cust_address' },
{ data: 'cust_route', name: 'cust_route' },
{ data: 'cust_city', name: 'cust_city' },
{ data: 'cust_state', name: 'cust_state' },
{ data: 'cust_zip', name: 'cust_zip' },
{ data: 'cust_county', name: 'cust_county' },
{ data: 'cust_lat', name: 'cust_lat' },
{ data: 'cust_lon', name: 'cust_lon' },
{ data: 'cust_note', name: 'cust_note' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  };
  let table = $('.datatable-CustomerContact').DataTable(dtOverrideGlobals);
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
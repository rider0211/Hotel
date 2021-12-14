@extends('layouts.admin')
@section('content')
@can('lead_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.leads.create') }}">
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
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Lead">
            <thead>
                <tr>
                    <th width="10">

                    </th>
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
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('lead_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.leads.massDestroy') }}",
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
    ajax: "{{ route('admin.leads.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'first_name', name: 'first_name' },
{ data: 'last_name', name: 'last_name' },
{ data: 'email', name: 'email' },
{ data: 'email_2', name: 'email_2' },
{ data: 'phone', name: 'phone' },
{ data: 'phone_2', name: 'phone_2' },
{ data: 'description', name: 'description' },
{ data: 'homephone', name: 'homephone' },
{ data: 'goog_address', name: 'goog_address' },
{ data: 'lead_lon', name: 'lead_lon' },
{ data: 'lead_lat', name: 'lead_lat' },
{ data: 'lead_street', name: 'lead_street' },
{ data: 'lead_lot', name: 'lead_lot' },
{ data: 'lead_city', name: 'lead_city' },
{ data: 'lead_state', name: 'lead_state' },
{ data: 'lead_zip', name: 'lead_zip' },
{ data: 'lead_county', name: 'lead_county' },
{ data: 'dateassigned', name: 'dateassigned' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  };
  let table = $('.datatable-Lead').DataTable(dtOverrideGlobals);
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
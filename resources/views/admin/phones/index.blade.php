@extends('layouts.admin')
@section('content')
@can('phone_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.phones.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.phone.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Phone', 'route' => 'admin.phones.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.phone.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Phone">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_type_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.primary_phone_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.primary_phone') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.phone_contact') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.primary_ext') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.primary_dnc') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.primary_dnt') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.phone') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_access_company') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_cty_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_area_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_primary_phone_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_dnc') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_fed_do_not_call') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_state_do_not_call') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_written_permission_dnc') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_dnc_exempt_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_dnc_exempt') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_house_do_not_call') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_description') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_ext') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_do_not_fax') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_is_active') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.last_updateby_user') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_last_update') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phonenumbersearch') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phonenumberexcludingareacodesearch') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_dnt') }}
                    </th>
                    <th>
                        {{ trans('cruds.phone.fields.ms_phone_dnt_texting_opt_out') }}
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
                            @foreach(App\Models\Phone::PRIMARY_PHONE_TYPE_SELECT as $key => $item)
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
@can('phone_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.phones.massDestroy') }}",
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
    ajax: "{{ route('admin.phones.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'ms_phone_type_name', name: 'ms_phone_type_name' },
{ data: 'primary_phone_type', name: 'primary_phone_type' },
{ data: 'primary_phone', name: 'primary_phone' },
{ data: 'phone_contact', name: 'phone_contact' },
{ data: 'primary_ext', name: 'primary_ext' },
{ data: 'primary_dnc', name: 'primary_dnc' },
{ data: 'primary_dnt', name: 'primary_dnt' },
{ data: 'phone', name: 'phone' },
{ data: 'ms_access_company', name: 'ms_access_company' },
{ data: 'ms_phone_type', name: 'ms_phone_type' },
{ data: 'ms_phone_cty_code', name: 'ms_phone_cty_code' },
{ data: 'ms_phone_area_code', name: 'ms_phone_area_code' },
{ data: 'ms_phone_number', name: 'ms_phone_number' },
{ data: 'ms_primary_phone_type', name: 'ms_primary_phone_type' },
{ data: 'ms_phone_dnc', name: 'ms_phone_dnc' },
{ data: 'ms_phone_fed_do_not_call', name: 'ms_phone_fed_do_not_call' },
{ data: 'ms_phone_state_do_not_call', name: 'ms_phone_state_do_not_call' },
{ data: 'ms_written_permission_dnc', name: 'ms_written_permission_dnc' },
{ data: 'ms_phone_dnc_exempt_date', name: 'ms_phone_dnc_exempt_date' },
{ data: 'ms_phone_dnc_exempt', name: 'ms_phone_dnc_exempt' },
{ data: 'ms_phone_house_do_not_call', name: 'ms_phone_house_do_not_call' },
{ data: 'ms_phone_description', name: 'ms_phone_description' },
{ data: 'ms_phone_ext', name: 'ms_phone_ext' },
{ data: 'ms_phone_do_not_fax', name: 'ms_phone_do_not_fax' },
{ data: 'ms_is_active', name: 'ms_is_active' },
{ data: 'last_updateby_user', name: 'last_updateby_user' },
{ data: 'ms_last_update', name: 'ms_last_update' },
{ data: 'ms_phonenumbersearch', name: 'ms_phonenumbersearch' },
{ data: 'ms_phonenumberexcludingareacodesearch', name: 'ms_phonenumberexcludingareacodesearch' },
{ data: 'ms_phone_dnt', name: 'ms_phone_dnt' },
{ data: 'ms_phone_dnt_texting_opt_out', name: 'ms_phone_dnt_texting_opt_out' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  };
  let table = $('.datatable-Phone').DataTable(dtOverrideGlobals);
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
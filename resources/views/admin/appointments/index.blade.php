@extends('layouts.admin')
@section('content')
@can('appointment_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.appointments.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.appointment.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Appointment', 'route' => 'admin.appointments.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.appointment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Appointment">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.appt_start_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.appt_end_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.appt_notes') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.id_app_result') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.ms_id_appt_result') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.id_res_reason') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.ms_id_appt_reason') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.appt_result_code_description') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.id_appt_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.ms_id_appt_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.ms_id_appt') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.ms_id_lead') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.id_lead') }}
                    </th>
                    <th>
                        {{ trans('cruds.lead.fields.last_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.appt_sales_1_emp') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.id_sales_assign') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.appt_set_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.appt_subject') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.ms_appt_set_by') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.appt_set_by') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.confirmation_activity') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.ms_id_sched') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.is_active') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.ms_is_active') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.id_last_update_by') }}
                    </th>
                    <th>
                        {{ trans('cruds.appointment.fields.ms_id_last_update_by') }}
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
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($activity_results as $key => $item)
                                <option value="{{ $item->result }}">{{ $item->result }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($activity_results as $key => $item)
                                <option value="{{ $item->result }}">{{ $item->result }}</option>
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
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($leads as $key => $item)
                                <option value="{{ $item->first_name }}">{{ $item->first_name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($users as $key => $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
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
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($users as $key => $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
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
                    </td>
                    <td>
                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($users as $key => $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
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
@can('appointment_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.appointments.massDestroy') }}",
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
    ajax: "{{ route('admin.appointments.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'appt_start_date', name: 'appt_start_date' },
{ data: 'appt_end_date', name: 'appt_end_date' },
{ data: 'appt_notes', name: 'appt_notes' },
{ data: 'id_app_result_result', name: 'id_app_result.result' },
{ data: 'ms_id_appt_result', name: 'ms_id_appt_result' },
{ data: 'id_res_reason_result', name: 'id_res_reason.result' },
{ data: 'ms_id_appt_reason', name: 'ms_id_appt_reason' },
{ data: 'appt_result_code_description', name: 'appt_result_code_description' },
{ data: 'id_appt_type', name: 'id_appt_type' },
{ data: 'ms_id_appt_type', name: 'ms_id_appt_type' },
{ data: 'ms_id_appt', name: 'ms_id_appt' },
{ data: 'ms_id_lead', name: 'ms_id_lead' },
{ data: 'id_lead_first_name', name: 'id_lead.first_name' },
{ data: 'id_lead.last_name', name: 'id_lead.last_name' },
{ data: 'appt_sales_1_emp', name: 'appt_sales_1_emp' },
{ data: 'id_sales_assign_name', name: 'id_sales_assign.name' },
{ data: 'appt_set_date', name: 'appt_set_date' },
{ data: 'appt_subject', name: 'appt_subject' },
{ data: 'ms_appt_set_by', name: 'ms_appt_set_by' },
{ data: 'appt_set_by_name', name: 'appt_set_by.name' },
{ data: 'confirmation_activity', name: 'confirmation_activity' },
{ data: 'ms_id_sched', name: 'ms_id_sched' },
{ data: 'is_active', name: 'is_active' },
{ data: 'ms_is_active', name: 'ms_is_active' },
{ data: 'id_last_update_by_name', name: 'id_last_update_by.name' },
{ data: 'ms_id_last_update_by', name: 'ms_id_last_update_by' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  };
  let table = $('.datatable-Appointment').DataTable(dtOverrideGlobals);
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
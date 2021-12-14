@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('appointment_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.appointments.create') }}">
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
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Appointment">
                            <thead>
                                <tr>
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
                            <tbody>
                                @foreach($appointments as $key => $appointment)
                                    <tr data-entry-id="{{ $appointment->id }}">
                                        <td>
                                            {{ $appointment->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->appt_start_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->appt_end_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->appt_notes ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->id_app_result->result ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->ms_id_appt_result ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->id_res_reason->result ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->ms_id_appt_reason ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->appt_result_code_description ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->id_appt_type ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->ms_id_appt_type ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->ms_id_appt ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->ms_id_lead ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->id_lead->first_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->id_lead->last_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->appt_sales_1_emp ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->id_sales_assign->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->appt_set_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->appt_subject ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->ms_appt_set_by ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->appt_set_by->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->confirmation_activity ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->ms_id_sched ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $appointment->is_active ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $appointment->is_active ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            {{ $appointment->ms_is_active ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->id_last_update_by->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $appointment->ms_id_last_update_by ?? '' }}
                                        </td>
                                        <td>
                                            @can('appointment_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.appointments.show', $appointment->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('appointment_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.appointments.edit', $appointment->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('appointment_delete')
                                                <form action="{{ route('frontend.appointments.destroy', $appointment->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('appointment_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.appointments.massDestroy') }}",
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
  let table = $('.datatable-Appointment:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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
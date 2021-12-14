@extends('layouts.admin')
@section('content')
@can('activity_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.activities.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.activity.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Activity', 'route' => 'admin.activities.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.activity.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Activity">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.act_start') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.act_due_by') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.act_end') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.lead') }}
                    </th>
                    <th>
                        {{ trans('cruds.lead.fields.last_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.job') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.contact') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activity_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activity_type') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activity_reference') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activity_result') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activity_completed_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activity_due_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activity_reminder_minutes') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activity_notes') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.appt') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activity_assign_emp') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activity_sched_emp') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activity_reminder_is_dismissed') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.is_active') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.last_updateby') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.last_update') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.id_led') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activityresultid') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activityreferenceid') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.t_scheduler_event') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.activity_process_step') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.id_job') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.process_type_steps') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.service_order') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.contact_marketing_queue') }}
                    </th>
                    <th>
                        {{ trans('cruds.activity.fields.column_27') }}
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
                            @foreach($leads as $key => $item)
                                <option value="{{ $item->first_name }}">{{ $item->first_name }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                    </td>
                    <td>
                        <select class="search">
                            <option value>{{ trans('global.all') }}</option>
                            @foreach($jobs as $key => $item)
                                <option value="{{ $item->job_title }}">{{ $item->job_title }}</option>
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
@can('activity_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.activities.massDestroy') }}",
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
    ajax: "{{ route('admin.activities.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'act_start', name: 'act_start' },
{ data: 'act_due_by', name: 'act_due_by' },
{ data: 'act_end', name: 'act_end' },
{ data: 'lead_first_name', name: 'lead.first_name' },
{ data: 'lead.last_name', name: 'lead.last_name' },
{ data: 'job_job_title', name: 'job.job_title' },
{ data: 'contact', name: 'contact' },
{ data: 'activity_name', name: 'activity_name' },
{ data: 'activity_type', name: 'activity_type' },
{ data: 'activity_reference', name: 'activity_reference' },
{ data: 'activity_result', name: 'activity_result' },
{ data: 'activity_completed_date', name: 'activity_completed_date' },
{ data: 'activity_due_date', name: 'activity_due_date' },
{ data: 'activity_reminder_minutes', name: 'activity_reminder_minutes' },
{ data: 'activity_notes', name: 'activity_notes' },
{ data: 'appt', name: 'appt' },
{ data: 'activity_assign_emp', name: 'activity_assign_emp' },
{ data: 'activity_sched_emp', name: 'activity_sched_emp' },
{ data: 'activity_reminder_is_dismissed', name: 'activity_reminder_is_dismissed' },
{ data: 'is_active', name: 'is_active' },
{ data: 'last_updateby', name: 'last_updateby' },
{ data: 'last_update', name: 'last_update' },
{ data: 'id_led', name: 'id_led' },
{ data: 'activityresultid', name: 'activityresultid' },
{ data: 'activityreferenceid', name: 'activityreferenceid' },
{ data: 't_scheduler_event', name: 't_scheduler_event' },
{ data: 'activity_process_step', name: 'activity_process_step' },
{ data: 'id_job', name: 'id_job' },
{ data: 'process_type_steps', name: 'process_type_steps' },
{ data: 'service_order', name: 'service_order' },
{ data: 'contact_marketing_queue', name: 'contact_marketing_queue' },
{ data: 'column_27', name: 'column_27' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  };
  let table = $('.datatable-Activity').DataTable(dtOverrideGlobals);
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
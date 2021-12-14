@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('activity_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.activities.create') }}">
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
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Activity">
                            <thead>
                                <tr>
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
                            <tbody>
                                @foreach($activities as $key => $activity)
                                    <tr data-entry-id="{{ $activity->id }}">
                                        <td>
                                            {{ $activity->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->act_start ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->act_due_by ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->act_end ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->lead->first_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->lead->last_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->job->job_title ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->contact ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activity_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activity_type ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activity_reference ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activity_result ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activity_completed_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activity_due_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activity_reminder_minutes ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activity_notes ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->appt ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activity_assign_emp ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activity_sched_emp ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activity_reminder_is_dismissed ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->is_active ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->last_updateby ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->last_update ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->id_led ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activityresultid ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activityreferenceid ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->t_scheduler_event ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->activity_process_step ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->id_job ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->process_type_steps ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->service_order ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->contact_marketing_queue ?? '' }}
                                        </td>
                                        <td>
                                            {{ $activity->column_27 ?? '' }}
                                        </td>
                                        <td>
                                            @can('activity_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.activities.show', $activity->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('activity_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.activities.edit', $activity->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('activity_delete')
                                                <form action="{{ route('frontend.activities.destroy', $activity->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('activity_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.activities.massDestroy') }}",
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
  let table = $('.datatable-Activity:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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
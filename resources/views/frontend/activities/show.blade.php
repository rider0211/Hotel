@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.activity.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.activities.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $activity->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.act_notes') }}
                                    </th>
                                    <td>
                                        {!! $activity->act_notes !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.act_start') }}
                                    </th>
                                    <td>
                                        {{ $activity->act_start }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.act_due_by') }}
                                    </th>
                                    <td>
                                        {{ $activity->act_due_by }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.act_end') }}
                                    </th>
                                    <td>
                                        {{ $activity->act_end }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.lead') }}
                                    </th>
                                    <td>
                                        {{ $activity->lead->first_name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.job') }}
                                    </th>
                                    <td>
                                        {{ $activity->job->job_title ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.contact') }}
                                    </th>
                                    <td>
                                        {{ $activity->contact }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activity_name') }}
                                    </th>
                                    <td>
                                        {{ $activity->activity_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activity_type') }}
                                    </th>
                                    <td>
                                        {{ $activity->activity_type }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activity_reference') }}
                                    </th>
                                    <td>
                                        {{ $activity->activity_reference }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activity_result') }}
                                    </th>
                                    <td>
                                        {{ $activity->activity_result }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activity_completed_date') }}
                                    </th>
                                    <td>
                                        {{ $activity->activity_completed_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activity_due_date') }}
                                    </th>
                                    <td>
                                        {{ $activity->activity_due_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activity_reminder_minutes') }}
                                    </th>
                                    <td>
                                        {{ $activity->activity_reminder_minutes }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activity_notes') }}
                                    </th>
                                    <td>
                                        {{ $activity->activity_notes }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.appt') }}
                                    </th>
                                    <td>
                                        {{ $activity->appt }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activity_assign_emp') }}
                                    </th>
                                    <td>
                                        {{ $activity->activity_assign_emp }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activity_sched_emp') }}
                                    </th>
                                    <td>
                                        {{ $activity->activity_sched_emp }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activity_reminder_is_dismissed') }}
                                    </th>
                                    <td>
                                        {{ $activity->activity_reminder_is_dismissed }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.is_active') }}
                                    </th>
                                    <td>
                                        {{ $activity->is_active }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.last_updateby') }}
                                    </th>
                                    <td>
                                        {{ $activity->last_updateby }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.last_update') }}
                                    </th>
                                    <td>
                                        {{ $activity->last_update }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.id_led') }}
                                    </th>
                                    <td>
                                        {{ $activity->id_led }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activityresultid') }}
                                    </th>
                                    <td>
                                        {{ $activity->activityresultid }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activityreferenceid') }}
                                    </th>
                                    <td>
                                        {{ $activity->activityreferenceid }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.t_scheduler_event') }}
                                    </th>
                                    <td>
                                        {{ $activity->t_scheduler_event }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.activity_process_step') }}
                                    </th>
                                    <td>
                                        {{ $activity->activity_process_step }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.id_job') }}
                                    </th>
                                    <td>
                                        {{ $activity->id_job }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.process_type_steps') }}
                                    </th>
                                    <td>
                                        {{ $activity->process_type_steps }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.service_order') }}
                                    </th>
                                    <td>
                                        {{ $activity->service_order }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.contact_marketing_queue') }}
                                    </th>
                                    <td>
                                        {{ $activity->contact_marketing_queue }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.activity.fields.column_27') }}
                                    </th>
                                    <td>
                                        {{ $activity->column_27 }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.activities.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
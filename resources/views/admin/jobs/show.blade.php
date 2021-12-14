@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.job.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.jobs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.id') }}
                        </th>
                        <td>
                            {{ $job->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_title') }}
                        </th>
                        <td>
                            {{ $job->job_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.contact') }}
                        </th>
                        <td>
                            {{ $job->contact }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.lead') }}
                        </th>
                        <td>
                            {{ $job->lead }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_site') }}
                        </th>
                        <td>
                            {{ $job->job_site }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_number') }}
                        </th>
                        <td>
                            {{ $job->job_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_name') }}
                        </th>
                        <td>
                            {{ $job->job_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_desc') }}
                        </th>
                        <td>
                            {{ $job->job_desc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_type') }}
                        </th>
                        <td>
                            {{ $job->job_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_status') }}
                        </th>
                        <td>
                            {{ $job->job_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_address_1') }}
                        </th>
                        <td>
                            {{ $job->job_address_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_address_2') }}
                        </th>
                        <td>
                            {{ $job->job_address_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_city') }}
                        </th>
                        <td>
                            {{ $job->job_city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_state') }}
                        </th>
                        <td>
                            {{ $job->job_state }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_zip') }}
                        </th>
                        <td>
                            {{ $job->job_zip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_structure_value_code') }}
                        </th>
                        <td>
                            {{ $job->job_structure_value_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_note') }}
                        </th>
                        <td>
                            {{ $job->job_note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_start_date') }}
                        </th>
                        <td>
                            {{ $job->job_start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.sale_date') }}
                        </th>
                        <td>
                            {{ $job->sale_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_completed_date') }}
                        </th>
                        <td>
                            {{ $job->job_completed_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.qb_sync') }}
                        </th>
                        <td>
                            {{ $job->qb_sync }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.qb_sync_date') }}
                        </th>
                        <td>
                            {{ $job->qb_sync_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.qb') }}
                        </th>
                        <td>
                            {{ $job->qb }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.is_active') }}
                        </th>
                        <td>
                            {{ $job->is_active }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.last_updateby') }}
                        </th>
                        <td>
                            {{ $job->last_updateby }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.last_update') }}
                        </th>
                        <td>
                            {{ $job->last_update }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.lead_appt_sold') }}
                        </th>
                        <td>
                            {{ $job->lead_appt_sold }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.exported_to_guild_quality') }}
                        </th>
                        <td>
                            {{ $job->exported_to_guild_quality }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.job_site_name') }}
                        </th>
                        <td>
                            {{ $job->job_site_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.qbweb') }}
                        </th>
                        <td>
                            {{ $job->qbweb }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.jobs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#realed_job_parts_orders" role="tab" data-toggle="tab">
                {{ trans('cruds.partsOrder.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#job_activities" role="tab" data-toggle="tab">
                {{ trans('cruds.activity.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="realed_job_parts_orders">
            @includeIf('admin.jobs.relationships.realedJobPartsOrders', ['partsOrders' => $job->realedJobPartsOrders])
        </div>
        <div class="tab-pane" role="tabpanel" id="job_activities">
            @includeIf('admin.jobs.relationships.jobActivities', ['activities' => $job->jobActivities])
        </div>
    </div>
</div>

@endsection
@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.appointment.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.appointments.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $appointment->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.appt_start_date') }}
                                    </th>
                                    <td>
                                        {{ $appointment->appt_start_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.appt_end_date') }}
                                    </th>
                                    <td>
                                        {{ $appointment->appt_end_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.appt_notes') }}
                                    </th>
                                    <td>
                                        {{ $appointment->appt_notes }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.id_app_result') }}
                                    </th>
                                    <td>
                                        {{ $appointment->id_app_result->result ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.ms_id_appt_result') }}
                                    </th>
                                    <td>
                                        {{ $appointment->ms_id_appt_result }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.id_res_reason') }}
                                    </th>
                                    <td>
                                        {{ $appointment->id_res_reason->result ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.ms_id_appt_reason') }}
                                    </th>
                                    <td>
                                        {{ $appointment->ms_id_appt_reason }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.appt_result_code_description') }}
                                    </th>
                                    <td>
                                        {{ $appointment->appt_result_code_description }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.id_appt_type') }}
                                    </th>
                                    <td>
                                        {{ $appointment->id_appt_type }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.ms_id_appt_type') }}
                                    </th>
                                    <td>
                                        {{ $appointment->ms_id_appt_type }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.ms_id_appt') }}
                                    </th>
                                    <td>
                                        {{ $appointment->ms_id_appt }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.ms_id_lead') }}
                                    </th>
                                    <td>
                                        {{ $appointment->ms_id_lead }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.id_lead') }}
                                    </th>
                                    <td>
                                        {{ $appointment->id_lead->first_name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.appt_sales_1_emp') }}
                                    </th>
                                    <td>
                                        {{ $appointment->appt_sales_1_emp }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.id_sales_assign') }}
                                    </th>
                                    <td>
                                        {{ $appointment->id_sales_assign->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.appt_set_date') }}
                                    </th>
                                    <td>
                                        {{ $appointment->appt_set_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.appt_subject') }}
                                    </th>
                                    <td>
                                        {{ $appointment->appt_subject }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.ms_appt_set_by') }}
                                    </th>
                                    <td>
                                        {{ $appointment->ms_appt_set_by }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.appt_set_by') }}
                                    </th>
                                    <td>
                                        {{ $appointment->appt_set_by->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.confirmation_activity') }}
                                    </th>
                                    <td>
                                        {{ $appointment->confirmation_activity }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.ms_id_sched') }}
                                    </th>
                                    <td>
                                        {{ $appointment->ms_id_sched }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.is_active') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $appointment->is_active ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.ms_is_active') }}
                                    </th>
                                    <td>
                                        {{ $appointment->ms_is_active }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.id_last_update_by') }}
                                    </th>
                                    <td>
                                        {{ $appointment->id_last_update_by->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.ms_id_last_update_by') }}
                                    </th>
                                    <td>
                                        {{ $appointment->ms_id_last_update_by }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.appointments.index') }}">
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
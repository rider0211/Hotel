@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.appointment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.appointments.update", [$appointment->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="appt_start_date">{{ trans('cruds.appointment.fields.appt_start_date') }}</label>
                <input class="form-control datetime {{ $errors->has('appt_start_date') ? 'is-invalid' : '' }}" type="text" name="appt_start_date" id="appt_start_date" value="{{ old('appt_start_date', $appointment->appt_start_date) }}" required>
                @if($errors->has('appt_start_date'))
                    <span class="text-danger">{{ $errors->first('appt_start_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.appt_start_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="appt_end_date">{{ trans('cruds.appointment.fields.appt_end_date') }}</label>
                <input class="form-control datetime {{ $errors->has('appt_end_date') ? 'is-invalid' : '' }}" type="text" name="appt_end_date" id="appt_end_date" value="{{ old('appt_end_date', $appointment->appt_end_date) }}" required>
                @if($errors->has('appt_end_date'))
                    <span class="text-danger">{{ $errors->first('appt_end_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.appt_end_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="appt_notes">{{ trans('cruds.appointment.fields.appt_notes') }}</label>
                <input class="form-control {{ $errors->has('appt_notes') ? 'is-invalid' : '' }}" type="text" name="appt_notes" id="appt_notes" value="{{ old('appt_notes', $appointment->appt_notes) }}">
                @if($errors->has('appt_notes'))
                    <span class="text-danger">{{ $errors->first('appt_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.appt_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_app_result_id">{{ trans('cruds.appointment.fields.id_app_result') }}</label>
                <select class="form-control select2 {{ $errors->has('id_app_result') ? 'is-invalid' : '' }}" name="id_app_result_id" id="id_app_result_id">
                    @foreach($id_app_results as $id => $entry)
                        <option value="{{ $id }}" {{ (old('id_app_result_id') ? old('id_app_result_id') : $appointment->id_app_result->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('id_app_result'))
                    <span class="text-danger">{{ $errors->first('id_app_result') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.id_app_result_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_id_appt_result">{{ trans('cruds.appointment.fields.ms_id_appt_result') }}</label>
                <input class="form-control {{ $errors->has('ms_id_appt_result') ? 'is-invalid' : '' }}" type="text" name="ms_id_appt_result" id="ms_id_appt_result" value="{{ old('ms_id_appt_result', $appointment->ms_id_appt_result) }}">
                @if($errors->has('ms_id_appt_result'))
                    <span class="text-danger">{{ $errors->first('ms_id_appt_result') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.ms_id_appt_result_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_res_reason_id">{{ trans('cruds.appointment.fields.id_res_reason') }}</label>
                <select class="form-control select2 {{ $errors->has('id_res_reason') ? 'is-invalid' : '' }}" name="id_res_reason_id" id="id_res_reason_id">
                    @foreach($id_res_reasons as $id => $entry)
                        <option value="{{ $id }}" {{ (old('id_res_reason_id') ? old('id_res_reason_id') : $appointment->id_res_reason->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('id_res_reason'))
                    <span class="text-danger">{{ $errors->first('id_res_reason') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.id_res_reason_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_id_appt_reason">{{ trans('cruds.appointment.fields.ms_id_appt_reason') }}</label>
                <input class="form-control {{ $errors->has('ms_id_appt_reason') ? 'is-invalid' : '' }}" type="text" name="ms_id_appt_reason" id="ms_id_appt_reason" value="{{ old('ms_id_appt_reason', $appointment->ms_id_appt_reason) }}">
                @if($errors->has('ms_id_appt_reason'))
                    <span class="text-danger">{{ $errors->first('ms_id_appt_reason') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.ms_id_appt_reason_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="appt_result_code_description">{{ trans('cruds.appointment.fields.appt_result_code_description') }}</label>
                <input class="form-control {{ $errors->has('appt_result_code_description') ? 'is-invalid' : '' }}" type="text" name="appt_result_code_description" id="appt_result_code_description" value="{{ old('appt_result_code_description', $appointment->appt_result_code_description) }}">
                @if($errors->has('appt_result_code_description'))
                    <span class="text-danger">{{ $errors->first('appt_result_code_description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.appt_result_code_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_appt_type">{{ trans('cruds.appointment.fields.id_appt_type') }}</label>
                <input class="form-control {{ $errors->has('id_appt_type') ? 'is-invalid' : '' }}" type="text" name="id_appt_type" id="id_appt_type" value="{{ old('id_appt_type', $appointment->id_appt_type) }}">
                @if($errors->has('id_appt_type'))
                    <span class="text-danger">{{ $errors->first('id_appt_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.id_appt_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_id_appt_type">{{ trans('cruds.appointment.fields.ms_id_appt_type') }}</label>
                <input class="form-control {{ $errors->has('ms_id_appt_type') ? 'is-invalid' : '' }}" type="text" name="ms_id_appt_type" id="ms_id_appt_type" value="{{ old('ms_id_appt_type', $appointment->ms_id_appt_type) }}">
                @if($errors->has('ms_id_appt_type'))
                    <span class="text-danger">{{ $errors->first('ms_id_appt_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.ms_id_appt_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_id_appt">{{ trans('cruds.appointment.fields.ms_id_appt') }}</label>
                <input class="form-control {{ $errors->has('ms_id_appt') ? 'is-invalid' : '' }}" type="text" name="ms_id_appt" id="ms_id_appt" value="{{ old('ms_id_appt', $appointment->ms_id_appt) }}">
                @if($errors->has('ms_id_appt'))
                    <span class="text-danger">{{ $errors->first('ms_id_appt') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.ms_id_appt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_lead_id">{{ trans('cruds.appointment.fields.id_lead') }}</label>
                <select class="form-control select2 {{ $errors->has('id_lead') ? 'is-invalid' : '' }}" name="id_lead_id" id="id_lead_id">
                    @foreach($id_leads as $id => $entry)
                        <option value="{{ $id }}" {{ (old('id_lead_id') ? old('id_lead_id') : $appointment->id_lead->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('id_lead'))
                    <span class="text-danger">{{ $errors->first('id_lead') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.id_lead_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="appt_sales_1_emp">{{ trans('cruds.appointment.fields.appt_sales_1_emp') }}</label>
                <input class="form-control {{ $errors->has('appt_sales_1_emp') ? 'is-invalid' : '' }}" type="text" name="appt_sales_1_emp" id="appt_sales_1_emp" value="{{ old('appt_sales_1_emp', $appointment->appt_sales_1_emp) }}">
                @if($errors->has('appt_sales_1_emp'))
                    <span class="text-danger">{{ $errors->first('appt_sales_1_emp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.appt_sales_1_emp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_sales_assign_id">{{ trans('cruds.appointment.fields.id_sales_assign') }}</label>
                <select class="form-control select2 {{ $errors->has('id_sales_assign') ? 'is-invalid' : '' }}" name="id_sales_assign_id" id="id_sales_assign_id">
                    @foreach($id_sales_assigns as $id => $entry)
                        <option value="{{ $id }}" {{ (old('id_sales_assign_id') ? old('id_sales_assign_id') : $appointment->id_sales_assign->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('id_sales_assign'))
                    <span class="text-danger">{{ $errors->first('id_sales_assign') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.id_sales_assign_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="appt_subject">{{ trans('cruds.appointment.fields.appt_subject') }}</label>
                <input class="form-control {{ $errors->has('appt_subject') ? 'is-invalid' : '' }}" type="text" name="appt_subject" id="appt_subject" value="{{ old('appt_subject', $appointment->appt_subject) }}">
                @if($errors->has('appt_subject'))
                    <span class="text-danger">{{ $errors->first('appt_subject') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.appt_subject_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_appt_set_by">{{ trans('cruds.appointment.fields.ms_appt_set_by') }}</label>
                <input class="form-control {{ $errors->has('ms_appt_set_by') ? 'is-invalid' : '' }}" type="text" name="ms_appt_set_by" id="ms_appt_set_by" value="{{ old('ms_appt_set_by', $appointment->ms_appt_set_by) }}">
                @if($errors->has('ms_appt_set_by'))
                    <span class="text-danger">{{ $errors->first('ms_appt_set_by') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.ms_appt_set_by_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="confirmation_activity">{{ trans('cruds.appointment.fields.confirmation_activity') }}</label>
                <input class="form-control {{ $errors->has('confirmation_activity') ? 'is-invalid' : '' }}" type="text" name="confirmation_activity" id="confirmation_activity" value="{{ old('confirmation_activity', $appointment->confirmation_activity) }}">
                @if($errors->has('confirmation_activity'))
                    <span class="text-danger">{{ $errors->first('confirmation_activity') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.confirmation_activity_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $appointment->is_active || old('is_active', 0) === 1 ? 'checked' : '' }} required>
                    <label class="required form-check-label" for="is_active">{{ trans('cruds.appointment.fields.is_active') }}</label>
                </div>
                @if($errors->has('is_active'))
                    <span class="text-danger">{{ $errors->first('is_active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.is_active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_last_update_by_id">{{ trans('cruds.appointment.fields.id_last_update_by') }}</label>
                <select class="form-control select2 {{ $errors->has('id_last_update_by') ? 'is-invalid' : '' }}" name="id_last_update_by_id" id="id_last_update_by_id">
                    @foreach($id_last_update_bies as $id => $entry)
                        <option value="{{ $id }}" {{ (old('id_last_update_by_id') ? old('id_last_update_by_id') : $appointment->id_last_update_by->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('id_last_update_by'))
                    <span class="text-danger">{{ $errors->first('id_last_update_by') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.id_last_update_by_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.appointment.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.appointments.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="appt_start_date">{{ trans('cruds.appointment.fields.appt_start_date') }}</label>
                            <input class="form-control datetime" type="text" name="appt_start_date" id="appt_start_date" value="{{ old('appt_start_date') }}" required>
                            @if($errors->has('appt_start_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('appt_start_date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.appt_start_date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="appt_end_date">{{ trans('cruds.appointment.fields.appt_end_date') }}</label>
                            <input class="form-control datetime" type="text" name="appt_end_date" id="appt_end_date" value="{{ old('appt_end_date') }}" required>
                            @if($errors->has('appt_end_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('appt_end_date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.appt_end_date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="appt_notes">{{ trans('cruds.appointment.fields.appt_notes') }}</label>
                            <input class="form-control" type="text" name="appt_notes" id="appt_notes" value="{{ old('appt_notes', '') }}">
                            @if($errors->has('appt_notes'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('appt_notes') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.appt_notes_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="id_app_result_id">{{ trans('cruds.appointment.fields.id_app_result') }}</label>
                            <select class="form-control select2" name="id_app_result_id" id="id_app_result_id">
                                @foreach($id_app_results as $id => $entry)
                                    <option value="{{ $id }}" {{ old('id_app_result_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('id_app_result'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('id_app_result') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.id_app_result_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="ms_id_appt_result">{{ trans('cruds.appointment.fields.ms_id_appt_result') }}</label>
                            <input class="form-control" type="text" name="ms_id_appt_result" id="ms_id_appt_result" value="{{ old('ms_id_appt_result', '') }}">
                            @if($errors->has('ms_id_appt_result'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ms_id_appt_result') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.ms_id_appt_result_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="id_res_reason_id">{{ trans('cruds.appointment.fields.id_res_reason') }}</label>
                            <select class="form-control select2" name="id_res_reason_id" id="id_res_reason_id">
                                @foreach($id_res_reasons as $id => $entry)
                                    <option value="{{ $id }}" {{ old('id_res_reason_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('id_res_reason'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('id_res_reason') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.id_res_reason_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="ms_id_appt_reason">{{ trans('cruds.appointment.fields.ms_id_appt_reason') }}</label>
                            <input class="form-control" type="text" name="ms_id_appt_reason" id="ms_id_appt_reason" value="{{ old('ms_id_appt_reason', '') }}">
                            @if($errors->has('ms_id_appt_reason'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ms_id_appt_reason') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.ms_id_appt_reason_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="appt_result_code_description">{{ trans('cruds.appointment.fields.appt_result_code_description') }}</label>
                            <input class="form-control" type="text" name="appt_result_code_description" id="appt_result_code_description" value="{{ old('appt_result_code_description', '') }}">
                            @if($errors->has('appt_result_code_description'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('appt_result_code_description') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.appt_result_code_description_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="id_appt_type">{{ trans('cruds.appointment.fields.id_appt_type') }}</label>
                            <input class="form-control" type="text" name="id_appt_type" id="id_appt_type" value="{{ old('id_appt_type', '') }}">
                            @if($errors->has('id_appt_type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('id_appt_type') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.id_appt_type_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="ms_id_appt_type">{{ trans('cruds.appointment.fields.ms_id_appt_type') }}</label>
                            <input class="form-control" type="text" name="ms_id_appt_type" id="ms_id_appt_type" value="{{ old('ms_id_appt_type', '') }}">
                            @if($errors->has('ms_id_appt_type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ms_id_appt_type') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.ms_id_appt_type_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="ms_id_appt">{{ trans('cruds.appointment.fields.ms_id_appt') }}</label>
                            <input class="form-control" type="text" name="ms_id_appt" id="ms_id_appt" value="{{ old('ms_id_appt', '') }}">
                            @if($errors->has('ms_id_appt'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ms_id_appt') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.ms_id_appt_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="ms_id_lead">{{ trans('cruds.appointment.fields.ms_id_lead') }}</label>
                            <input class="form-control" type="text" name="ms_id_lead" id="ms_id_lead" value="{{ old('ms_id_lead', '') }}">
                            @if($errors->has('ms_id_lead'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ms_id_lead') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.ms_id_lead_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="id_lead_id">{{ trans('cruds.appointment.fields.id_lead') }}</label>
                            <select class="form-control select2" name="id_lead_id" id="id_lead_id">
                                @foreach($id_leads as $id => $entry)
                                    <option value="{{ $id }}" {{ old('id_lead_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('id_lead'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('id_lead') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.id_lead_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="appt_sales_1_emp">{{ trans('cruds.appointment.fields.appt_sales_1_emp') }}</label>
                            <input class="form-control" type="text" name="appt_sales_1_emp" id="appt_sales_1_emp" value="{{ old('appt_sales_1_emp', '') }}">
                            @if($errors->has('appt_sales_1_emp'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('appt_sales_1_emp') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.appt_sales_1_emp_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="id_sales_assign_id">{{ trans('cruds.appointment.fields.id_sales_assign') }}</label>
                            <select class="form-control select2" name="id_sales_assign_id" id="id_sales_assign_id">
                                @foreach($id_sales_assigns as $id => $entry)
                                    <option value="{{ $id }}" {{ old('id_sales_assign_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('id_sales_assign'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('id_sales_assign') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.id_sales_assign_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="appt_subject">{{ trans('cruds.appointment.fields.appt_subject') }}</label>
                            <input class="form-control" type="text" name="appt_subject" id="appt_subject" value="{{ old('appt_subject', '') }}">
                            @if($errors->has('appt_subject'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('appt_subject') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.appt_subject_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="ms_appt_set_by">{{ trans('cruds.appointment.fields.ms_appt_set_by') }}</label>
                            <input class="form-control" type="text" name="ms_appt_set_by" id="ms_appt_set_by" value="{{ old('ms_appt_set_by', '') }}">
                            @if($errors->has('ms_appt_set_by'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ms_appt_set_by') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.ms_appt_set_by_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="confirmation_activity">{{ trans('cruds.appointment.fields.confirmation_activity') }}</label>
                            <input class="form-control" type="text" name="confirmation_activity" id="confirmation_activity" value="{{ old('confirmation_activity', '') }}">
                            @if($errors->has('confirmation_activity'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('confirmation_activity') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.confirmation_activity_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="checkbox" name="is_active" id="is_active" value="1" required {{ old('is_active', 0) == 1 || old('is_active') === null ? 'checked' : '' }}>
                                <label class="required" for="is_active">{{ trans('cruds.appointment.fields.is_active') }}</label>
                            </div>
                            @if($errors->has('is_active'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('is_active') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.is_active_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="id_last_update_by_id">{{ trans('cruds.appointment.fields.id_last_update_by') }}</label>
                            <select class="form-control select2" name="id_last_update_by_id" id="id_last_update_by_id">
                                @foreach($id_last_update_bies as $id => $entry)
                                    <option value="{{ $id }}" {{ old('id_last_update_by_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('id_last_update_by'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('id_last_update_by') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection
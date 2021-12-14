@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.job.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.jobs.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="job_title">{{ trans('cruds.job.fields.job_title') }}</label>
                <input class="form-control {{ $errors->has('job_title') ? 'is-invalid' : '' }}" type="text" name="job_title" id="job_title" value="{{ old('job_title', '') }}" required>
                @if($errors->has('job_title'))
                    <span class="text-danger">{{ $errors->first('job_title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact">{{ trans('cruds.job.fields.contact') }}</label>
                <input class="form-control {{ $errors->has('contact') ? 'is-invalid' : '' }}" type="text" name="contact" id="contact" value="{{ old('contact', '') }}">
                @if($errors->has('contact'))
                    <span class="text-danger">{{ $errors->first('contact') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.contact_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lead">{{ trans('cruds.job.fields.lead') }}</label>
                <input class="form-control {{ $errors->has('lead') ? 'is-invalid' : '' }}" type="text" name="lead" id="lead" value="{{ old('lead', '') }}">
                @if($errors->has('lead'))
                    <span class="text-danger">{{ $errors->first('lead') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.lead_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_site">{{ trans('cruds.job.fields.job_site') }}</label>
                <input class="form-control {{ $errors->has('job_site') ? 'is-invalid' : '' }}" type="text" name="job_site" id="job_site" value="{{ old('job_site', '') }}">
                @if($errors->has('job_site'))
                    <span class="text-danger">{{ $errors->first('job_site') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_site_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_number">{{ trans('cruds.job.fields.job_number') }}</label>
                <input class="form-control {{ $errors->has('job_number') ? 'is-invalid' : '' }}" type="text" name="job_number" id="job_number" value="{{ old('job_number', '') }}">
                @if($errors->has('job_number'))
                    <span class="text-danger">{{ $errors->first('job_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_name">{{ trans('cruds.job.fields.job_name') }}</label>
                <input class="form-control {{ $errors->has('job_name') ? 'is-invalid' : '' }}" type="text" name="job_name" id="job_name" value="{{ old('job_name', '') }}">
                @if($errors->has('job_name'))
                    <span class="text-danger">{{ $errors->first('job_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_desc">{{ trans('cruds.job.fields.job_desc') }}</label>
                <input class="form-control {{ $errors->has('job_desc') ? 'is-invalid' : '' }}" type="text" name="job_desc" id="job_desc" value="{{ old('job_desc', '') }}">
                @if($errors->has('job_desc'))
                    <span class="text-danger">{{ $errors->first('job_desc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_desc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_type">{{ trans('cruds.job.fields.job_type') }}</label>
                <input class="form-control {{ $errors->has('job_type') ? 'is-invalid' : '' }}" type="text" name="job_type" id="job_type" value="{{ old('job_type', '') }}">
                @if($errors->has('job_type'))
                    <span class="text-danger">{{ $errors->first('job_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_status">{{ trans('cruds.job.fields.job_status') }}</label>
                <input class="form-control {{ $errors->has('job_status') ? 'is-invalid' : '' }}" type="text" name="job_status" id="job_status" value="{{ old('job_status', '') }}">
                @if($errors->has('job_status'))
                    <span class="text-danger">{{ $errors->first('job_status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_address_1">{{ trans('cruds.job.fields.job_address_1') }}</label>
                <input class="form-control {{ $errors->has('job_address_1') ? 'is-invalid' : '' }}" type="text" name="job_address_1" id="job_address_1" value="{{ old('job_address_1', '') }}">
                @if($errors->has('job_address_1'))
                    <span class="text-danger">{{ $errors->first('job_address_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_address_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_address_2">{{ trans('cruds.job.fields.job_address_2') }}</label>
                <input class="form-control {{ $errors->has('job_address_2') ? 'is-invalid' : '' }}" type="text" name="job_address_2" id="job_address_2" value="{{ old('job_address_2', '') }}">
                @if($errors->has('job_address_2'))
                    <span class="text-danger">{{ $errors->first('job_address_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_address_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_city">{{ trans('cruds.job.fields.job_city') }}</label>
                <input class="form-control {{ $errors->has('job_city') ? 'is-invalid' : '' }}" type="text" name="job_city" id="job_city" value="{{ old('job_city', '') }}">
                @if($errors->has('job_city'))
                    <span class="text-danger">{{ $errors->first('job_city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_state">{{ trans('cruds.job.fields.job_state') }}</label>
                <input class="form-control {{ $errors->has('job_state') ? 'is-invalid' : '' }}" type="text" name="job_state" id="job_state" value="{{ old('job_state', '') }}">
                @if($errors->has('job_state'))
                    <span class="text-danger">{{ $errors->first('job_state') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_zip">{{ trans('cruds.job.fields.job_zip') }}</label>
                <input class="form-control {{ $errors->has('job_zip') ? 'is-invalid' : '' }}" type="text" name="job_zip" id="job_zip" value="{{ old('job_zip', '') }}">
                @if($errors->has('job_zip'))
                    <span class="text-danger">{{ $errors->first('job_zip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_zip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_structure_value_code">{{ trans('cruds.job.fields.job_structure_value_code') }}</label>
                <input class="form-control {{ $errors->has('job_structure_value_code') ? 'is-invalid' : '' }}" type="text" name="job_structure_value_code" id="job_structure_value_code" value="{{ old('job_structure_value_code', '') }}">
                @if($errors->has('job_structure_value_code'))
                    <span class="text-danger">{{ $errors->first('job_structure_value_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_structure_value_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_note">{{ trans('cruds.job.fields.job_note') }}</label>
                <input class="form-control {{ $errors->has('job_note') ? 'is-invalid' : '' }}" type="text" name="job_note" id="job_note" value="{{ old('job_note', '') }}">
                @if($errors->has('job_note'))
                    <span class="text-danger">{{ $errors->first('job_note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_note_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_start_date">{{ trans('cruds.job.fields.job_start_date') }}</label>
                <input class="form-control {{ $errors->has('job_start_date') ? 'is-invalid' : '' }}" type="text" name="job_start_date" id="job_start_date" value="{{ old('job_start_date', '') }}">
                @if($errors->has('job_start_date'))
                    <span class="text-danger">{{ $errors->first('job_start_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_start_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sale_date">{{ trans('cruds.job.fields.sale_date') }}</label>
                <input class="form-control {{ $errors->has('sale_date') ? 'is-invalid' : '' }}" type="text" name="sale_date" id="sale_date" value="{{ old('sale_date', '') }}">
                @if($errors->has('sale_date'))
                    <span class="text-danger">{{ $errors->first('sale_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.sale_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_completed_date">{{ trans('cruds.job.fields.job_completed_date') }}</label>
                <input class="form-control {{ $errors->has('job_completed_date') ? 'is-invalid' : '' }}" type="text" name="job_completed_date" id="job_completed_date" value="{{ old('job_completed_date', '') }}">
                @if($errors->has('job_completed_date'))
                    <span class="text-danger">{{ $errors->first('job_completed_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_completed_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qb_sync">{{ trans('cruds.job.fields.qb_sync') }}</label>
                <input class="form-control {{ $errors->has('qb_sync') ? 'is-invalid' : '' }}" type="text" name="qb_sync" id="qb_sync" value="{{ old('qb_sync', '') }}">
                @if($errors->has('qb_sync'))
                    <span class="text-danger">{{ $errors->first('qb_sync') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.qb_sync_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qb_sync_date">{{ trans('cruds.job.fields.qb_sync_date') }}</label>
                <input class="form-control {{ $errors->has('qb_sync_date') ? 'is-invalid' : '' }}" type="text" name="qb_sync_date" id="qb_sync_date" value="{{ old('qb_sync_date', '') }}">
                @if($errors->has('qb_sync_date'))
                    <span class="text-danger">{{ $errors->first('qb_sync_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.qb_sync_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qb">{{ trans('cruds.job.fields.qb') }}</label>
                <input class="form-control {{ $errors->has('qb') ? 'is-invalid' : '' }}" type="text" name="qb" id="qb" value="{{ old('qb', '') }}">
                @if($errors->has('qb'))
                    <span class="text-danger">{{ $errors->first('qb') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.qb_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="is_active">{{ trans('cruds.job.fields.is_active') }}</label>
                <input class="form-control {{ $errors->has('is_active') ? 'is-invalid' : '' }}" type="text" name="is_active" id="is_active" value="{{ old('is_active', '') }}">
                @if($errors->has('is_active'))
                    <span class="text-danger">{{ $errors->first('is_active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.is_active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_updateby">{{ trans('cruds.job.fields.last_updateby') }}</label>
                <input class="form-control {{ $errors->has('last_updateby') ? 'is-invalid' : '' }}" type="text" name="last_updateby" id="last_updateby" value="{{ old('last_updateby', '') }}">
                @if($errors->has('last_updateby'))
                    <span class="text-danger">{{ $errors->first('last_updateby') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.last_updateby_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_update">{{ trans('cruds.job.fields.last_update') }}</label>
                <input class="form-control {{ $errors->has('last_update') ? 'is-invalid' : '' }}" type="text" name="last_update" id="last_update" value="{{ old('last_update', '') }}">
                @if($errors->has('last_update'))
                    <span class="text-danger">{{ $errors->first('last_update') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.last_update_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lead_appt_sold">{{ trans('cruds.job.fields.lead_appt_sold') }}</label>
                <input class="form-control {{ $errors->has('lead_appt_sold') ? 'is-invalid' : '' }}" type="text" name="lead_appt_sold" id="lead_appt_sold" value="{{ old('lead_appt_sold', '') }}">
                @if($errors->has('lead_appt_sold'))
                    <span class="text-danger">{{ $errors->first('lead_appt_sold') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.lead_appt_sold_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="exported_to_guild_quality">{{ trans('cruds.job.fields.exported_to_guild_quality') }}</label>
                <input class="form-control {{ $errors->has('exported_to_guild_quality') ? 'is-invalid' : '' }}" type="text" name="exported_to_guild_quality" id="exported_to_guild_quality" value="{{ old('exported_to_guild_quality', '') }}">
                @if($errors->has('exported_to_guild_quality'))
                    <span class="text-danger">{{ $errors->first('exported_to_guild_quality') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.exported_to_guild_quality_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_site_name">{{ trans('cruds.job.fields.job_site_name') }}</label>
                <input class="form-control {{ $errors->has('job_site_name') ? 'is-invalid' : '' }}" type="text" name="job_site_name" id="job_site_name" value="{{ old('job_site_name', '') }}">
                @if($errors->has('job_site_name'))
                    <span class="text-danger">{{ $errors->first('job_site_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.job_site_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="qbweb">{{ trans('cruds.job.fields.qbweb') }}</label>
                <input class="form-control {{ $errors->has('qbweb') ? 'is-invalid' : '' }}" type="text" name="qbweb" id="qbweb" value="{{ old('qbweb', '') }}">
                @if($errors->has('qbweb'))
                    <span class="text-danger">{{ $errors->first('qbweb') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.job.fields.qbweb_helper') }}</span>
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
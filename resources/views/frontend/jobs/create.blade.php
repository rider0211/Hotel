@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.job.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.jobs.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="job_title">{{ trans('cruds.job.fields.job_title') }}</label>
                            <input class="form-control" type="text" name="job_title" id="job_title" value="{{ old('job_title', '') }}" required>
                            @if($errors->has('job_title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_title_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="contact">{{ trans('cruds.job.fields.contact') }}</label>
                            <input class="form-control" type="text" name="contact" id="contact" value="{{ old('contact', '') }}">
                            @if($errors->has('contact'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('contact') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.contact_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="lead">{{ trans('cruds.job.fields.lead') }}</label>
                            <input class="form-control" type="text" name="lead" id="lead" value="{{ old('lead', '') }}">
                            @if($errors->has('lead'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lead') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.lead_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_site">{{ trans('cruds.job.fields.job_site') }}</label>
                            <input class="form-control" type="text" name="job_site" id="job_site" value="{{ old('job_site', '') }}">
                            @if($errors->has('job_site'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_site') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_site_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_number">{{ trans('cruds.job.fields.job_number') }}</label>
                            <input class="form-control" type="text" name="job_number" id="job_number" value="{{ old('job_number', '') }}">
                            @if($errors->has('job_number'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_number') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_number_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_name">{{ trans('cruds.job.fields.job_name') }}</label>
                            <input class="form-control" type="text" name="job_name" id="job_name" value="{{ old('job_name', '') }}">
                            @if($errors->has('job_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_desc">{{ trans('cruds.job.fields.job_desc') }}</label>
                            <input class="form-control" type="text" name="job_desc" id="job_desc" value="{{ old('job_desc', '') }}">
                            @if($errors->has('job_desc'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_desc') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_desc_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_type">{{ trans('cruds.job.fields.job_type') }}</label>
                            <input class="form-control" type="text" name="job_type" id="job_type" value="{{ old('job_type', '') }}">
                            @if($errors->has('job_type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_type') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_type_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_status">{{ trans('cruds.job.fields.job_status') }}</label>
                            <input class="form-control" type="text" name="job_status" id="job_status" value="{{ old('job_status', '') }}">
                            @if($errors->has('job_status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_address_1">{{ trans('cruds.job.fields.job_address_1') }}</label>
                            <input class="form-control" type="text" name="job_address_1" id="job_address_1" value="{{ old('job_address_1', '') }}">
                            @if($errors->has('job_address_1'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_address_1') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_address_1_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_address_2">{{ trans('cruds.job.fields.job_address_2') }}</label>
                            <input class="form-control" type="text" name="job_address_2" id="job_address_2" value="{{ old('job_address_2', '') }}">
                            @if($errors->has('job_address_2'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_address_2') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_address_2_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_city">{{ trans('cruds.job.fields.job_city') }}</label>
                            <input class="form-control" type="text" name="job_city" id="job_city" value="{{ old('job_city', '') }}">
                            @if($errors->has('job_city'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_city') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_city_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_state">{{ trans('cruds.job.fields.job_state') }}</label>
                            <input class="form-control" type="text" name="job_state" id="job_state" value="{{ old('job_state', '') }}">
                            @if($errors->has('job_state'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_state') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_state_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_zip">{{ trans('cruds.job.fields.job_zip') }}</label>
                            <input class="form-control" type="text" name="job_zip" id="job_zip" value="{{ old('job_zip', '') }}">
                            @if($errors->has('job_zip'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_zip') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_zip_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_structure_value_code">{{ trans('cruds.job.fields.job_structure_value_code') }}</label>
                            <input class="form-control" type="text" name="job_structure_value_code" id="job_structure_value_code" value="{{ old('job_structure_value_code', '') }}">
                            @if($errors->has('job_structure_value_code'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_structure_value_code') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_structure_value_code_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_note">{{ trans('cruds.job.fields.job_note') }}</label>
                            <input class="form-control" type="text" name="job_note" id="job_note" value="{{ old('job_note', '') }}">
                            @if($errors->has('job_note'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_note') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_note_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_start_date">{{ trans('cruds.job.fields.job_start_date') }}</label>
                            <input class="form-control" type="text" name="job_start_date" id="job_start_date" value="{{ old('job_start_date', '') }}">
                            @if($errors->has('job_start_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_start_date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_start_date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="sale_date">{{ trans('cruds.job.fields.sale_date') }}</label>
                            <input class="form-control" type="text" name="sale_date" id="sale_date" value="{{ old('sale_date', '') }}">
                            @if($errors->has('sale_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('sale_date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.sale_date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_completed_date">{{ trans('cruds.job.fields.job_completed_date') }}</label>
                            <input class="form-control" type="text" name="job_completed_date" id="job_completed_date" value="{{ old('job_completed_date', '') }}">
                            @if($errors->has('job_completed_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_completed_date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_completed_date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="qb_sync">{{ trans('cruds.job.fields.qb_sync') }}</label>
                            <input class="form-control" type="text" name="qb_sync" id="qb_sync" value="{{ old('qb_sync', '') }}">
                            @if($errors->has('qb_sync'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('qb_sync') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.qb_sync_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="qb_sync_date">{{ trans('cruds.job.fields.qb_sync_date') }}</label>
                            <input class="form-control" type="text" name="qb_sync_date" id="qb_sync_date" value="{{ old('qb_sync_date', '') }}">
                            @if($errors->has('qb_sync_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('qb_sync_date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.qb_sync_date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="qb">{{ trans('cruds.job.fields.qb') }}</label>
                            <input class="form-control" type="text" name="qb" id="qb" value="{{ old('qb', '') }}">
                            @if($errors->has('qb'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('qb') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.qb_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="is_active">{{ trans('cruds.job.fields.is_active') }}</label>
                            <input class="form-control" type="text" name="is_active" id="is_active" value="{{ old('is_active', '') }}">
                            @if($errors->has('is_active'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('is_active') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.is_active_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="last_updateby">{{ trans('cruds.job.fields.last_updateby') }}</label>
                            <input class="form-control" type="text" name="last_updateby" id="last_updateby" value="{{ old('last_updateby', '') }}">
                            @if($errors->has('last_updateby'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('last_updateby') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.last_updateby_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="last_update">{{ trans('cruds.job.fields.last_update') }}</label>
                            <input class="form-control" type="text" name="last_update" id="last_update" value="{{ old('last_update', '') }}">
                            @if($errors->has('last_update'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('last_update') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.last_update_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="lead_appt_sold">{{ trans('cruds.job.fields.lead_appt_sold') }}</label>
                            <input class="form-control" type="text" name="lead_appt_sold" id="lead_appt_sold" value="{{ old('lead_appt_sold', '') }}">
                            @if($errors->has('lead_appt_sold'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lead_appt_sold') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.lead_appt_sold_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="exported_to_guild_quality">{{ trans('cruds.job.fields.exported_to_guild_quality') }}</label>
                            <input class="form-control" type="text" name="exported_to_guild_quality" id="exported_to_guild_quality" value="{{ old('exported_to_guild_quality', '') }}">
                            @if($errors->has('exported_to_guild_quality'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('exported_to_guild_quality') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.exported_to_guild_quality_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job_site_name">{{ trans('cruds.job.fields.job_site_name') }}</label>
                            <input class="form-control" type="text" name="job_site_name" id="job_site_name" value="{{ old('job_site_name', '') }}">
                            @if($errors->has('job_site_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job_site_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.job.fields.job_site_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="qbweb">{{ trans('cruds.job.fields.qbweb') }}</label>
                            <input class="form-control" type="text" name="qbweb" id="qbweb" value="{{ old('qbweb', '') }}">
                            @if($errors->has('qbweb'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('qbweb') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection
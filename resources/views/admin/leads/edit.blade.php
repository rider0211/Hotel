@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.lead.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.leads.update", [$lead->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="first_name">{{ trans('cruds.lead.fields.first_name') }}</label>
                <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', $lead->first_name) }}" required>
                @if($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.first_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_name">{{ trans('cruds.lead.fields.last_name') }}</label>
                <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', $lead->last_name) }}">
                @if($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.last_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.lead.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $lead->email) }}">
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email_2">{{ trans('cruds.lead.fields.email_2') }}</label>
                <input class="form-control {{ $errors->has('email_2') ? 'is-invalid' : '' }}" type="email" name="email_2" id="email_2" value="{{ old('email_2', $lead->email_2) }}">
                @if($errors->has('email_2'))
                    <span class="text-danger">{{ $errors->first('email_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.email_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.lead.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $lead->phone) }}">
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_2">{{ trans('cruds.lead.fields.phone_2') }}</label>
                <input class="form-control {{ $errors->has('phone_2') ? 'is-invalid' : '' }}" type="text" name="phone_2" id="phone_2" value="{{ old('phone_2', $lead->phone_2) }}">
                @if($errors->has('phone_2'))
                    <span class="text-danger">{{ $errors->first('phone_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.phone_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.lead.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $lead->description) }}</textarea>
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="homephone">{{ trans('cruds.lead.fields.homephone') }}</label>
                <input class="form-control {{ $errors->has('homephone') ? 'is-invalid' : '' }}" type="text" name="homephone" id="homephone" value="{{ old('homephone', $lead->homephone) }}">
                @if($errors->has('homephone'))
                    <span class="text-danger">{{ $errors->first('homephone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.homephone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="goog_address">{{ trans('cruds.lead.fields.goog_address') }}</label>
                <input class="form-control {{ $errors->has('goog_address') ? 'is-invalid' : '' }}" type="text" name="goog_address" id="goog_address" value="{{ old('goog_address', $lead->goog_address) }}">
                @if($errors->has('goog_address'))
                    <span class="text-danger">{{ $errors->first('goog_address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.goog_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lead_lon">{{ trans('cruds.lead.fields.lead_lon') }}</label>
                <input class="form-control {{ $errors->has('lead_lon') ? 'is-invalid' : '' }}" type="text" name="lead_lon" id="lead_lon" value="{{ old('lead_lon', $lead->lead_lon) }}">
                @if($errors->has('lead_lon'))
                    <span class="text-danger">{{ $errors->first('lead_lon') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.lead_lon_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lead_lat">{{ trans('cruds.lead.fields.lead_lat') }}</label>
                <input class="form-control {{ $errors->has('lead_lat') ? 'is-invalid' : '' }}" type="text" name="lead_lat" id="lead_lat" value="{{ old('lead_lat', $lead->lead_lat) }}">
                @if($errors->has('lead_lat'))
                    <span class="text-danger">{{ $errors->first('lead_lat') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.lead_lat_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lead_street">{{ trans('cruds.lead.fields.lead_street') }}</label>
                <input class="form-control {{ $errors->has('lead_street') ? 'is-invalid' : '' }}" type="text" name="lead_street" id="lead_street" value="{{ old('lead_street', $lead->lead_street) }}">
                @if($errors->has('lead_street'))
                    <span class="text-danger">{{ $errors->first('lead_street') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.lead_street_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lead_lot">{{ trans('cruds.lead.fields.lead_lot') }}</label>
                <input class="form-control {{ $errors->has('lead_lot') ? 'is-invalid' : '' }}" type="text" name="lead_lot" id="lead_lot" value="{{ old('lead_lot', $lead->lead_lot) }}">
                @if($errors->has('lead_lot'))
                    <span class="text-danger">{{ $errors->first('lead_lot') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.lead_lot_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lead_city">{{ trans('cruds.lead.fields.lead_city') }}</label>
                <input class="form-control {{ $errors->has('lead_city') ? 'is-invalid' : '' }}" type="text" name="lead_city" id="lead_city" value="{{ old('lead_city', $lead->lead_city) }}">
                @if($errors->has('lead_city'))
                    <span class="text-danger">{{ $errors->first('lead_city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.lead_city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lead_state">{{ trans('cruds.lead.fields.lead_state') }}</label>
                <input class="form-control {{ $errors->has('lead_state') ? 'is-invalid' : '' }}" type="text" name="lead_state" id="lead_state" value="{{ old('lead_state', $lead->lead_state) }}">
                @if($errors->has('lead_state'))
                    <span class="text-danger">{{ $errors->first('lead_state') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.lead_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lead_zip">{{ trans('cruds.lead.fields.lead_zip') }}</label>
                <input class="form-control {{ $errors->has('lead_zip') ? 'is-invalid' : '' }}" type="text" name="lead_zip" id="lead_zip" value="{{ old('lead_zip', $lead->lead_zip) }}">
                @if($errors->has('lead_zip'))
                    <span class="text-danger">{{ $errors->first('lead_zip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.lead_zip_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lead_county">{{ trans('cruds.lead.fields.lead_county') }}</label>
                <input class="form-control {{ $errors->has('lead_county') ? 'is-invalid' : '' }}" type="text" name="lead_county" id="lead_county" value="{{ old('lead_county', $lead->lead_county) }}">
                @if($errors->has('lead_county'))
                    <span class="text-danger">{{ $errors->first('lead_county') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.lead_county_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dateassigned">{{ trans('cruds.lead.fields.dateassigned') }}</label>
                <input class="form-control {{ $errors->has('dateassigned') ? 'is-invalid' : '' }}" type="text" name="dateassigned" id="dateassigned" value="{{ old('dateassigned', $lead->dateassigned) }}">
                @if($errors->has('dateassigned'))
                    <span class="text-danger">{{ $errors->first('dateassigned') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.lead.fields.dateassigned_helper') }}</span>
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
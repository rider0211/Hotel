@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.customerContact.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.customer-contacts.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="id_cust_status">{{ trans('cruds.customerContact.fields.id_cust_status') }}</label>
                            <input class="form-control" type="text" name="id_cust_status" id="id_cust_status" value="{{ old('id_cust_status', '') }}">
                            @if($errors->has('id_cust_status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('id_cust_status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.id_cust_status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="cust_status_id">{{ trans('cruds.customerContact.fields.cust_status') }}</label>
                            <select class="form-control select2" name="cust_status_id" id="cust_status_id" required>
                                @foreach($cust_statuses as $id => $entry)
                                    <option value="{{ $id }}" {{ old('cust_status_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('cust_status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="cust_fullname">{{ trans('cruds.customerContact.fields.cust_fullname') }}</label>
                            <input class="form-control" type="text" name="cust_fullname" id="cust_fullname" value="{{ old('cust_fullname', '') }}" required>
                            @if($errors->has('cust_fullname'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_fullname') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_fullname_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_title">{{ trans('cruds.customerContact.fields.cust_title') }}</label>
                            <input class="form-control" type="text" name="cust_title" id="cust_title" value="{{ old('cust_title', '') }}">
                            @if($errors->has('cust_title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_title_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.customerContact.fields.cust_vet') }}</label>
                            <select class="form-control" name="cust_vet" id="cust_vet">
                                <option value disabled {{ old('cust_vet', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\CustomerContact::CUST_VET_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('cust_vet', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('cust_vet'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_vet') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_vet_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_email">{{ trans('cruds.customerContact.fields.cust_email') }}</label>
                            <input class="form-control" type="email" name="cust_email" id="cust_email" value="{{ old('cust_email') }}">
                            @if($errors->has('cust_email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_email') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_email_2">{{ trans('cruds.customerContact.fields.cust_email_2') }}</label>
                            <input class="form-control" type="email" name="cust_email_2" id="cust_email_2" value="{{ old('cust_email_2') }}">
                            @if($errors->has('cust_email_2'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_email_2') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_email_2_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_phone">{{ trans('cruds.customerContact.fields.cust_phone') }}</label>
                            <input class="form-control" type="text" name="cust_phone" id="cust_phone" value="{{ old('cust_phone', '') }}">
                            @if($errors->has('cust_phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_phone') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_phone_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_phone_2">{{ trans('cruds.customerContact.fields.cust_phone_2') }}</label>
                            <input class="form-control" type="text" name="cust_phone_2" id="cust_phone_2" value="{{ old('cust_phone_2', '') }}">
                            @if($errors->has('cust_phone_2'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_phone_2') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_phone_2_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_fax">{{ trans('cruds.customerContact.fields.cust_fax') }}</label>
                            <input class="form-control" type="text" name="cust_fax" id="cust_fax" value="{{ old('cust_fax', '') }}">
                            @if($errors->has('cust_fax'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_fax') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_fax_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_address">{{ trans('cruds.customerContact.fields.cust_address') }}</label>
                            <input class="form-control" type="text" name="cust_address" id="cust_address" value="{{ old('cust_address', '') }}">
                            @if($errors->has('cust_address'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_address') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_address_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_route">{{ trans('cruds.customerContact.fields.cust_route') }}</label>
                            <input class="form-control" type="text" name="cust_route" id="cust_route" value="{{ old('cust_route', '') }}">
                            @if($errors->has('cust_route'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_route') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_route_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_city">{{ trans('cruds.customerContact.fields.cust_city') }}</label>
                            <input class="form-control" type="text" name="cust_city" id="cust_city" value="{{ old('cust_city', '') }}">
                            @if($errors->has('cust_city'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_city') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_city_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_state">{{ trans('cruds.customerContact.fields.cust_state') }}</label>
                            <input class="form-control" type="text" name="cust_state" id="cust_state" value="{{ old('cust_state', '') }}">
                            @if($errors->has('cust_state'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_state') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_state_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_zip">{{ trans('cruds.customerContact.fields.cust_zip') }}</label>
                            <input class="form-control" type="text" name="cust_zip" id="cust_zip" value="{{ old('cust_zip', '') }}">
                            @if($errors->has('cust_zip'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_zip') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_zip_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_county">{{ trans('cruds.customerContact.fields.cust_county') }}</label>
                            <input class="form-control" type="text" name="cust_county" id="cust_county" value="{{ old('cust_county', '') }}">
                            @if($errors->has('cust_county'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_county') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_county_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_lat">{{ trans('cruds.customerContact.fields.cust_lat') }}</label>
                            <input class="form-control" type="text" name="cust_lat" id="cust_lat" value="{{ old('cust_lat', '') }}">
                            @if($errors->has('cust_lat'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_lat') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_lat_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_lon">{{ trans('cruds.customerContact.fields.cust_lon') }}</label>
                            <input class="form-control" type="text" name="cust_lon" id="cust_lon" value="{{ old('cust_lon', '') }}">
                            @if($errors->has('cust_lon'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_lon') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_lon_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cust_note">{{ trans('cruds.customerContact.fields.cust_note') }}</label>
                            <input class="form-control" type="text" name="cust_note" id="cust_note" value="{{ old('cust_note', '') }}">
                            @if($errors->has('cust_note'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cust_note') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerContact.fields.cust_note_helper') }}</span>
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
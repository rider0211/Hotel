@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.phone.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.phones.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="ms_phone_type_name">{{ trans('cruds.phone.fields.ms_phone_type_name') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_type_name') ? 'is-invalid' : '' }}" type="text" name="ms_phone_type_name" id="ms_phone_type_name" value="{{ old('ms_phone_type_name', '') }}">
                @if($errors->has('ms_phone_type_name'))
                    <span class="text-danger">{{ $errors->first('ms_phone_type_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_type_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.phone.fields.primary_phone_type') }}</label>
                <select class="form-control {{ $errors->has('primary_phone_type') ? 'is-invalid' : '' }}" name="primary_phone_type" id="primary_phone_type" required>
                    <option value disabled {{ old('primary_phone_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Phone::PRIMARY_PHONE_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('primary_phone_type', 'Mobile Phone') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('primary_phone_type'))
                    <span class="text-danger">{{ $errors->first('primary_phone_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.primary_phone_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="primary_phone">{{ trans('cruds.phone.fields.primary_phone') }}</label>
                <input class="form-control {{ $errors->has('primary_phone') ? 'is-invalid' : '' }}" type="text" name="primary_phone" id="primary_phone" value="{{ old('primary_phone', '') }}">
                @if($errors->has('primary_phone'))
                    <span class="text-danger">{{ $errors->first('primary_phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.primary_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone_contact">{{ trans('cruds.phone.fields.phone_contact') }}</label>
                <input class="form-control {{ $errors->has('phone_contact') ? 'is-invalid' : '' }}" type="text" name="phone_contact" id="phone_contact" value="{{ old('phone_contact', '') }}">
                @if($errors->has('phone_contact'))
                    <span class="text-danger">{{ $errors->first('phone_contact') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.phone_contact_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="primary_ext">{{ trans('cruds.phone.fields.primary_ext') }}</label>
                <input class="form-control {{ $errors->has('primary_ext') ? 'is-invalid' : '' }}" type="text" name="primary_ext" id="primary_ext" value="{{ old('primary_ext', '') }}">
                @if($errors->has('primary_ext'))
                    <span class="text-danger">{{ $errors->first('primary_ext') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.primary_ext_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('primary_dnc') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="primary_dnc" value="0">
                    <input class="form-check-input" type="checkbox" name="primary_dnc" id="primary_dnc" value="1" {{ old('primary_dnc', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="primary_dnc">{{ trans('cruds.phone.fields.primary_dnc') }}</label>
                </div>
                @if($errors->has('primary_dnc'))
                    <span class="text-danger">{{ $errors->first('primary_dnc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.primary_dnc_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('primary_dnt') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="primary_dnt" value="0">
                    <input class="form-check-input" type="checkbox" name="primary_dnt" id="primary_dnt" value="1" {{ old('primary_dnt', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="primary_dnt">{{ trans('cruds.phone.fields.primary_dnt') }}</label>
                </div>
                @if($errors->has('primary_dnt'))
                    <span class="text-danger">{{ $errors->first('primary_dnt') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.primary_dnt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.phone.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_access_company">{{ trans('cruds.phone.fields.ms_access_company') }}</label>
                <input class="form-control {{ $errors->has('ms_access_company') ? 'is-invalid' : '' }}" type="text" name="ms_access_company" id="ms_access_company" value="{{ old('ms_access_company', '') }}">
                @if($errors->has('ms_access_company'))
                    <span class="text-danger">{{ $errors->first('ms_access_company') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_access_company_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_type">{{ trans('cruds.phone.fields.ms_phone_type') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_type') ? 'is-invalid' : '' }}" type="text" name="ms_phone_type" id="ms_phone_type" value="{{ old('ms_phone_type', '') }}">
                @if($errors->has('ms_phone_type'))
                    <span class="text-danger">{{ $errors->first('ms_phone_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_cty_code">{{ trans('cruds.phone.fields.ms_phone_cty_code') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_cty_code') ? 'is-invalid' : '' }}" type="text" name="ms_phone_cty_code" id="ms_phone_cty_code" value="{{ old('ms_phone_cty_code', '') }}">
                @if($errors->has('ms_phone_cty_code'))
                    <span class="text-danger">{{ $errors->first('ms_phone_cty_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_cty_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_area_code">{{ trans('cruds.phone.fields.ms_phone_area_code') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_area_code') ? 'is-invalid' : '' }}" type="text" name="ms_phone_area_code" id="ms_phone_area_code" value="{{ old('ms_phone_area_code', '') }}">
                @if($errors->has('ms_phone_area_code'))
                    <span class="text-danger">{{ $errors->first('ms_phone_area_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_area_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_number">{{ trans('cruds.phone.fields.ms_phone_number') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_number') ? 'is-invalid' : '' }}" type="text" name="ms_phone_number" id="ms_phone_number" value="{{ old('ms_phone_number', '') }}">
                @if($errors->has('ms_phone_number'))
                    <span class="text-danger">{{ $errors->first('ms_phone_number') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_primary_phone_type">{{ trans('cruds.phone.fields.ms_primary_phone_type') }}</label>
                <input class="form-control {{ $errors->has('ms_primary_phone_type') ? 'is-invalid' : '' }}" type="text" name="ms_primary_phone_type" id="ms_primary_phone_type" value="{{ old('ms_primary_phone_type', '') }}">
                @if($errors->has('ms_primary_phone_type'))
                    <span class="text-danger">{{ $errors->first('ms_primary_phone_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_primary_phone_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_dnc">{{ trans('cruds.phone.fields.ms_phone_dnc') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_dnc') ? 'is-invalid' : '' }}" type="text" name="ms_phone_dnc" id="ms_phone_dnc" value="{{ old('ms_phone_dnc', '') }}">
                @if($errors->has('ms_phone_dnc'))
                    <span class="text-danger">{{ $errors->first('ms_phone_dnc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_dnc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_fed_do_not_call">{{ trans('cruds.phone.fields.ms_phone_fed_do_not_call') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_fed_do_not_call') ? 'is-invalid' : '' }}" type="text" name="ms_phone_fed_do_not_call" id="ms_phone_fed_do_not_call" value="{{ old('ms_phone_fed_do_not_call', '') }}">
                @if($errors->has('ms_phone_fed_do_not_call'))
                    <span class="text-danger">{{ $errors->first('ms_phone_fed_do_not_call') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_fed_do_not_call_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_state_do_not_call">{{ trans('cruds.phone.fields.ms_phone_state_do_not_call') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_state_do_not_call') ? 'is-invalid' : '' }}" type="text" name="ms_phone_state_do_not_call" id="ms_phone_state_do_not_call" value="{{ old('ms_phone_state_do_not_call', '') }}">
                @if($errors->has('ms_phone_state_do_not_call'))
                    <span class="text-danger">{{ $errors->first('ms_phone_state_do_not_call') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_state_do_not_call_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_written_permission_dnc">{{ trans('cruds.phone.fields.ms_written_permission_dnc') }}</label>
                <input class="form-control {{ $errors->has('ms_written_permission_dnc') ? 'is-invalid' : '' }}" type="text" name="ms_written_permission_dnc" id="ms_written_permission_dnc" value="{{ old('ms_written_permission_dnc', '') }}">
                @if($errors->has('ms_written_permission_dnc'))
                    <span class="text-danger">{{ $errors->first('ms_written_permission_dnc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_written_permission_dnc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_dnc_exempt_date">{{ trans('cruds.phone.fields.ms_phone_dnc_exempt_date') }}</label>
                <input class="form-control datetime {{ $errors->has('ms_phone_dnc_exempt_date') ? 'is-invalid' : '' }}" type="text" name="ms_phone_dnc_exempt_date" id="ms_phone_dnc_exempt_date" value="{{ old('ms_phone_dnc_exempt_date') }}">
                @if($errors->has('ms_phone_dnc_exempt_date'))
                    <span class="text-danger">{{ $errors->first('ms_phone_dnc_exempt_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_dnc_exempt_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_dnc_exempt">{{ trans('cruds.phone.fields.ms_phone_dnc_exempt') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_dnc_exempt') ? 'is-invalid' : '' }}" type="text" name="ms_phone_dnc_exempt" id="ms_phone_dnc_exempt" value="{{ old('ms_phone_dnc_exempt', '') }}">
                @if($errors->has('ms_phone_dnc_exempt'))
                    <span class="text-danger">{{ $errors->first('ms_phone_dnc_exempt') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_dnc_exempt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_house_do_not_call">{{ trans('cruds.phone.fields.ms_phone_house_do_not_call') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_house_do_not_call') ? 'is-invalid' : '' }}" type="text" name="ms_phone_house_do_not_call" id="ms_phone_house_do_not_call" value="{{ old('ms_phone_house_do_not_call', '') }}">
                @if($errors->has('ms_phone_house_do_not_call'))
                    <span class="text-danger">{{ $errors->first('ms_phone_house_do_not_call') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_house_do_not_call_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_description">{{ trans('cruds.phone.fields.ms_phone_description') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_description') ? 'is-invalid' : '' }}" type="text" name="ms_phone_description" id="ms_phone_description" value="{{ old('ms_phone_description', '') }}">
                @if($errors->has('ms_phone_description'))
                    <span class="text-danger">{{ $errors->first('ms_phone_description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_ext">{{ trans('cruds.phone.fields.ms_phone_ext') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_ext') ? 'is-invalid' : '' }}" type="text" name="ms_phone_ext" id="ms_phone_ext" value="{{ old('ms_phone_ext', '') }}">
                @if($errors->has('ms_phone_ext'))
                    <span class="text-danger">{{ $errors->first('ms_phone_ext') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_ext_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_do_not_fax">{{ trans('cruds.phone.fields.ms_phone_do_not_fax') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_do_not_fax') ? 'is-invalid' : '' }}" type="text" name="ms_phone_do_not_fax" id="ms_phone_do_not_fax" value="{{ old('ms_phone_do_not_fax', '') }}">
                @if($errors->has('ms_phone_do_not_fax'))
                    <span class="text-danger">{{ $errors->first('ms_phone_do_not_fax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_do_not_fax_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_is_active">{{ trans('cruds.phone.fields.ms_is_active') }}</label>
                <input class="form-control {{ $errors->has('ms_is_active') ? 'is-invalid' : '' }}" type="text" name="ms_is_active" id="ms_is_active" value="{{ old('ms_is_active', '') }}">
                @if($errors->has('ms_is_active'))
                    <span class="text-danger">{{ $errors->first('ms_is_active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_is_active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_updateby_user">{{ trans('cruds.phone.fields.last_updateby_user') }}</label>
                <input class="form-control {{ $errors->has('last_updateby_user') ? 'is-invalid' : '' }}" type="text" name="last_updateby_user" id="last_updateby_user" value="{{ old('last_updateby_user', '') }}">
                @if($errors->has('last_updateby_user'))
                    <span class="text-danger">{{ $errors->first('last_updateby_user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.last_updateby_user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_last_update">{{ trans('cruds.phone.fields.ms_last_update') }}</label>
                <input class="form-control {{ $errors->has('ms_last_update') ? 'is-invalid' : '' }}" type="text" name="ms_last_update" id="ms_last_update" value="{{ old('ms_last_update', '') }}">
                @if($errors->has('ms_last_update'))
                    <span class="text-danger">{{ $errors->first('ms_last_update') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_last_update_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phonenumbersearch">{{ trans('cruds.phone.fields.ms_phonenumbersearch') }}</label>
                <input class="form-control {{ $errors->has('ms_phonenumbersearch') ? 'is-invalid' : '' }}" type="text" name="ms_phonenumbersearch" id="ms_phonenumbersearch" value="{{ old('ms_phonenumbersearch', '') }}">
                @if($errors->has('ms_phonenumbersearch'))
                    <span class="text-danger">{{ $errors->first('ms_phonenumbersearch') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phonenumbersearch_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phonenumberexcludingareacodesearch">{{ trans('cruds.phone.fields.ms_phonenumberexcludingareacodesearch') }}</label>
                <input class="form-control {{ $errors->has('ms_phonenumberexcludingareacodesearch') ? 'is-invalid' : '' }}" type="text" name="ms_phonenumberexcludingareacodesearch" id="ms_phonenumberexcludingareacodesearch" value="{{ old('ms_phonenumberexcludingareacodesearch', '') }}">
                @if($errors->has('ms_phonenumberexcludingareacodesearch'))
                    <span class="text-danger">{{ $errors->first('ms_phonenumberexcludingareacodesearch') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phonenumberexcludingareacodesearch_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_dnt">{{ trans('cruds.phone.fields.ms_phone_dnt') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_dnt') ? 'is-invalid' : '' }}" type="text" name="ms_phone_dnt" id="ms_phone_dnt" value="{{ old('ms_phone_dnt', '') }}">
                @if($errors->has('ms_phone_dnt'))
                    <span class="text-danger">{{ $errors->first('ms_phone_dnt') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_dnt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ms_phone_dnt_texting_opt_out">{{ trans('cruds.phone.fields.ms_phone_dnt_texting_opt_out') }}</label>
                <input class="form-control {{ $errors->has('ms_phone_dnt_texting_opt_out') ? 'is-invalid' : '' }}" type="text" name="ms_phone_dnt_texting_opt_out" id="ms_phone_dnt_texting_opt_out" value="{{ old('ms_phone_dnt_texting_opt_out', '') }}">
                @if($errors->has('ms_phone_dnt_texting_opt_out'))
                    <span class="text-danger">{{ $errors->first('ms_phone_dnt_texting_opt_out') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ms_phone_dnt_texting_opt_out_helper') }}</span>
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
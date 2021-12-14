@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.phone.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.phones.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.id') }}
                        </th>
                        <td>
                            {{ $phone->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_type_name') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_type_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.primary_phone_type') }}
                        </th>
                        <td>
                            {{ App\Models\Phone::PRIMARY_PHONE_TYPE_SELECT[$phone->primary_phone_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.primary_phone') }}
                        </th>
                        <td>
                            {{ $phone->primary_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.phone_contact') }}
                        </th>
                        <td>
                            {{ $phone->phone_contact }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.primary_ext') }}
                        </th>
                        <td>
                            {{ $phone->primary_ext }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.primary_dnc') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $phone->primary_dnc ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.primary_dnt') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $phone->primary_dnt ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.phone') }}
                        </th>
                        <td>
                            {{ $phone->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_access_company') }}
                        </th>
                        <td>
                            {{ $phone->ms_access_company }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_type') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_cty_code') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_cty_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_area_code') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_area_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_number') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_primary_phone_type') }}
                        </th>
                        <td>
                            {{ $phone->ms_primary_phone_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_dnc') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_dnc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_fed_do_not_call') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_fed_do_not_call }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_state_do_not_call') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_state_do_not_call }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_written_permission_dnc') }}
                        </th>
                        <td>
                            {{ $phone->ms_written_permission_dnc }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_dnc_exempt_date') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_dnc_exempt_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_dnc_exempt') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_dnc_exempt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_house_do_not_call') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_house_do_not_call }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_description') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_ext') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_ext }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_do_not_fax') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_do_not_fax }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_is_active') }}
                        </th>
                        <td>
                            {{ $phone->ms_is_active }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.last_updateby_user') }}
                        </th>
                        <td>
                            {{ $phone->last_updateby_user }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_last_update') }}
                        </th>
                        <td>
                            {{ $phone->ms_last_update }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phonenumbersearch') }}
                        </th>
                        <td>
                            {{ $phone->ms_phonenumbersearch }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phonenumberexcludingareacodesearch') }}
                        </th>
                        <td>
                            {{ $phone->ms_phonenumberexcludingareacodesearch }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_dnt') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_dnt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.phone.fields.ms_phone_dnt_texting_opt_out') }}
                        </th>
                        <td>
                            {{ $phone->ms_phone_dnt_texting_opt_out }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.phones.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
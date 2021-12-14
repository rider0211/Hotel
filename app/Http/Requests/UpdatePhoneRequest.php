<?php

namespace App\Http\Requests;

use App\Models\Phone;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePhoneRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('phone_edit');
    }

    public function rules()
    {
        return [
            'ms_phone_type_name' => [
                'string',
                'nullable',
            ],
            'primary_phone_type' => [
                'required',
            ],
            'primary_phone' => [
                'string',
                'nullable',
            ],
            'phone_contact' => [
                'string',
                'nullable',
            ],
            'primary_ext' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'ms_access_company' => [
                'string',
                'nullable',
            ],
            'ms_phone_type' => [
                'string',
                'nullable',
            ],
            'ms_phone_cty_code' => [
                'string',
                'nullable',
            ],
            'ms_phone_area_code' => [
                'string',
                'nullable',
            ],
            'ms_phone_number' => [
                'string',
                'nullable',
            ],
            'ms_primary_phone_type' => [
                'string',
                'nullable',
            ],
            'ms_phone_dnc' => [
                'string',
                'nullable',
            ],
            'ms_phone_fed_do_not_call' => [
                'string',
                'nullable',
            ],
            'ms_phone_state_do_not_call' => [
                'string',
                'nullable',
            ],
            'ms_written_permission_dnc' => [
                'string',
                'nullable',
            ],
            'ms_phone_dnc_exempt_date' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'ms_phone_dnc_exempt' => [
                'string',
                'nullable',
            ],
            'ms_phone_house_do_not_call' => [
                'string',
                'nullable',
            ],
            'ms_phone_description' => [
                'string',
                'nullable',
            ],
            'ms_phone_ext' => [
                'string',
                'nullable',
            ],
            'ms_phone_do_not_fax' => [
                'string',
                'nullable',
            ],
            'ms_is_active' => [
                'string',
                'nullable',
            ],
            'last_updateby_user' => [
                'string',
                'nullable',
            ],
            'ms_last_update' => [
                'string',
                'nullable',
            ],
            'ms_phonenumbersearch' => [
                'string',
                'nullable',
            ],
            'ms_phonenumberexcludingareacodesearch' => [
                'string',
                'nullable',
            ],
            'ms_phone_dnt' => [
                'string',
                'nullable',
            ],
            'ms_phone_dnt_texting_opt_out' => [
                'string',
                'nullable',
            ],
        ];
    }
}

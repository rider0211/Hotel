<?php

namespace App\Http\Requests;

use App\Models\Estimate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEstimateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('estimate_edit');
    }

    public function rules()
    {
        return [
            'est_stat' => [
                'string',
                'nullable',
            ],
            'est_state' => [
                'required',
            ],
            'est_county' => [
                'required',
            ],
            'est_state_tax' => [
                'string',
                'nullable',
            ],
            'est_county_tax' => [
                'string',
                'nullable',
            ],
            'est_total_after_tax' => [
                'string',
                'nullable',
            ],
            'dep_calc_1' => [
                'string',
                'required',
            ],
            'dep_calc_2' => [
                'string',
                'required',
            ],
            'dep_calc_3' => [
                'string',
                'required',
            ],
            'est_access' => [
                'string',
                'nullable',
            ],
            'est_cust_email_signed' => [
                'string',
                'nullable',
            ],
            'est_cust_first_signed' => [
                'string',
                'nullable',
            ],
            'est_cust_last_signed' => [
                'string',
                'nullable',
            ],
            'est_sign' => [
                'string',
                'nullable',
            ],
            'est_sign_int' => [
                'string',
                'nullable',
            ],
            'est_approve_date' => [
                'string',
                'nullable',
            ],
            'est_user_ip' => [
                'string',
                'nullable',
            ],
        ];
    }
}

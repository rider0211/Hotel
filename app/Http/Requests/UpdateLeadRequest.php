<?php

namespace App\Http\Requests;

use App\Models\Lead;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLeadRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('lead_edit');
    }

    public function rules()
    {
        return [
            'first_name' => [
                'string',
                'required',
            ],
            'last_name' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'phone_2' => [
                'string',
                'nullable',
            ],
            'homephone' => [
                'string',
                'nullable',
            ],
            'goog_address' => [
                'string',
                'nullable',
            ],
            'lead_lon' => [
                'string',
                'nullable',
            ],
            'lead_lat' => [
                'string',
                'nullable',
            ],
            'lead_street' => [
                'string',
                'nullable',
            ],
            'lead_lot' => [
                'string',
                'nullable',
            ],
            'lead_city' => [
                'string',
                'nullable',
            ],
            'lead_state' => [
                'string',
                'nullable',
            ],
            'lead_zip' => [
                'string',
                'nullable',
            ],
            'lead_county' => [
                'string',
                'nullable',
            ],
            'dateassigned' => [
                'string',
                'nullable',
            ],
        ];
    }
}

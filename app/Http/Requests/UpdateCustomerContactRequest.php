<?php

namespace App\Http\Requests;

use App\Models\CustomerContact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCustomerContactRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('customer_contact_edit');
    }

    public function rules()
    {
        return [
            'id_cust_status' => [
                'string',
                'nullable',
            ],
            'cust_status_id' => [
                'required',
                'integer',
            ],
            'cust_fullname' => [
                'string',
                'required',
            ],
            'cust_title' => [
                'string',
                'nullable',
            ],
            'cust_phone' => [
                'string',
                'nullable',
            ],
            'cust_phone_2' => [
                'string',
                'nullable',
            ],
            'cust_fax' => [
                'string',
                'nullable',
            ],
            'cust_address' => [
                'string',
                'nullable',
            ],
            'cust_route' => [
                'string',
                'nullable',
            ],
            'cust_city' => [
                'string',
                'nullable',
            ],
            'cust_state' => [
                'string',
                'nullable',
            ],
            'cust_zip' => [
                'string',
                'nullable',
            ],
            'cust_county' => [
                'string',
                'nullable',
            ],
            'cust_lat' => [
                'string',
                'nullable',
            ],
            'cust_lon' => [
                'string',
                'nullable',
            ],
            'cust_note' => [
                'string',
                'nullable',
            ],
        ];
    }
}

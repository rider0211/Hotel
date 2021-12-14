<?php

namespace App\Http\Requests;

use App\Models\CustomerStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCustomerStatusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('customer_status_edit');
    }

    public function rules()
    {
        return [
            'cs_status' => [
                'string',
                'nullable',
            ],
        ];
    }
}

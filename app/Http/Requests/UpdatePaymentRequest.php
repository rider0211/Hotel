<?php

namespace App\Http\Requests;

use App\Models\Payment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePaymentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('payment_edit');
    }

    public function rules()
    {
        return [
            'pay_amount' => [
                'string',
                'nullable',
            ],
            'job' => [
                'string',
                'nullable',
            ],
            'company' => [
                'string',
                'nullable',
            ],
            'payment_type' => [
                'string',
                'nullable',
            ],
            'contract' => [
                'string',
                'nullable',
            ],
            'payment_amount' => [
                'string',
                'nullable',
            ],
            'payment_method' => [
                'string',
                'nullable',
            ],
            'payment_description' => [
                'string',
                'nullable',
            ],
            'payment_date_time' => [
                'string',
                'nullable',
            ],
            'payment_cc_no' => [
                'string',
                'nullable',
            ],
            'applies_to_contract' => [
                'string',
                'nullable',
            ],
            'cashfinance' => [
                'string',
                'nullable',
            ],
            'is_active' => [
                'string',
                'nullable',
            ],
            'last_updateby' => [
                'string',
                'nullable',
            ],
            'last_update' => [
                'string',
                'nullable',
            ],
            'paysimple_payment' => [
                'string',
                'nullable',
            ],
        ];
    }
}

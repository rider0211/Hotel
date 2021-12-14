<?php

namespace App\Http\Requests;

use App\Models\Receiving;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreReceivingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('receiving_create');
    }

    public function rules()
    {
        return [
            'rcv_vendor' => [
                'string',
                'required',
            ],
            'rcv_expected' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'rcv_received' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}

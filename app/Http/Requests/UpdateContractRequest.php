<?php

namespace App\Http\Requests;

use App\Models\Contract;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContractRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contract_edit');
    }

    public function rules()
    {
        return [
            'ctr_name' => [
                'string',
                'nullable',
            ],
            'job' => [
                'string',
                'nullable',
            ],
            'contract_date' => [
                'string',
                'nullable',
            ],
            'contract_status' => [
                'string',
                'nullable',
            ],
            'contract_date_complete' => [
                'string',
                'nullable',
            ],
            'is_active' => [
                'string',
                'nullable',
            ],
            'last_update' => [
                'string',
                'nullable',
            ],
            'last_updateby' => [
                'string',
                'nullable',
            ],
        ];
    }
}

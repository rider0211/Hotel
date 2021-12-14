<?php

namespace App\Http\Requests;

use App\Models\LeadStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLeadStatusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('lead_status_create');
    }

    public function rules()
    {
        return [
            'lead_stat' => [
                'string',
                'required',
            ],
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\LeadStatusManager;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLeadStatusManagerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('lead_status_manager_create');
    }

    public function rules()
    {
        return [
            'lead_status_id' => [
                'required',
                'integer',
            ],
            'activity_results.*' => [
                'integer',
            ],
            'activity_results' => [
                'required',
                'array',
            ],
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\Job;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateJobRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('job_edit');
    }

    public function rules()
    {
        return [
            'job_title' => [
                'string',
                'required',
            ],
            'contact' => [
                'string',
                'nullable',
            ],
            'lead' => [
                'string',
                'nullable',
            ],
            'job_site' => [
                'string',
                'nullable',
            ],
            'job_number' => [
                'string',
                'nullable',
            ],
            'job_name' => [
                'string',
                'nullable',
            ],
            'job_desc' => [
                'string',
                'nullable',
            ],
            'job_type' => [
                'string',
                'nullable',
            ],
            'job_status' => [
                'string',
                'nullable',
            ],
            'job_address_1' => [
                'string',
                'nullable',
            ],
            'job_address_2' => [
                'string',
                'nullable',
            ],
            'job_city' => [
                'string',
                'nullable',
            ],
            'job_state' => [
                'string',
                'nullable',
            ],
            'job_zip' => [
                'string',
                'nullable',
            ],
            'job_structure_value_code' => [
                'string',
                'nullable',
            ],
            'job_note' => [
                'string',
                'nullable',
            ],
            'job_start_date' => [
                'string',
                'nullable',
            ],
            'sale_date' => [
                'string',
                'nullable',
            ],
            'job_completed_date' => [
                'string',
                'nullable',
            ],
            'qb_sync' => [
                'string',
                'nullable',
            ],
            'qb_sync_date' => [
                'string',
                'nullable',
            ],
            'qb' => [
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
            'lead_appt_sold' => [
                'string',
                'nullable',
            ],
            'exported_to_guild_quality' => [
                'string',
                'nullable',
            ],
            'job_site_name' => [
                'string',
                'nullable',
            ],
            'qbweb' => [
                'string',
                'nullable',
            ],
        ];
    }
}

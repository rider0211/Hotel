<?php

namespace App\Http\Requests;

use App\Models\Activity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreActivityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('activity_create');
    }

    public function rules()
    {
        return [
            'act_start' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'act_due_by' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'act_end' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'contact' => [
                'string',
                'nullable',
            ],
            'activity_name' => [
                'string',
                'nullable',
            ],
            'activity_type' => [
                'string',
                'nullable',
            ],
            'activity_reference' => [
                'string',
                'nullable',
            ],
            'activity_result' => [
                'string',
                'nullable',
            ],
            'activity_completed_date' => [
                'string',
                'nullable',
            ],
            'activity_due_date' => [
                'string',
                'nullable',
            ],
            'activity_reminder_minutes' => [
                'string',
                'nullable',
            ],
            'activity_notes' => [
                'string',
                'nullable',
            ],
            'appt' => [
                'string',
                'nullable',
            ],
            'activity_assign_emp' => [
                'string',
                'nullable',
            ],
            'activity_sched_emp' => [
                'string',
                'nullable',
            ],
            'activity_reminder_is_dismissed' => [
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
            'id_led' => [
                'string',
                'nullable',
            ],
            'activityresultid' => [
                'string',
                'nullable',
            ],
            'activityreferenceid' => [
                'string',
                'nullable',
            ],
            't_scheduler_event' => [
                'string',
                'nullable',
            ],
            'activity_process_step' => [
                'string',
                'nullable',
            ],
            'id_job' => [
                'string',
                'nullable',
            ],
            'process_type_steps' => [
                'string',
                'nullable',
            ],
            'service_order' => [
                'string',
                'nullable',
            ],
            'contact_marketing_queue' => [
                'string',
                'nullable',
            ],
            'column_27' => [
                'string',
                'nullable',
            ],
        ];
    }
}

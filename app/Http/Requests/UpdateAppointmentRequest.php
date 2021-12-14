<?php

namespace App\Http\Requests;

use App\Models\Appointment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAppointmentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('appointment_edit');
    }

    public function rules()
    {
        return [
            'appt_start_date' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'appt_end_date' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
            'appt_notes' => [
                'string',
                'nullable',
            ],
            'ms_id_appt_result' => [
                'string',
                'nullable',
            ],
            'ms_id_appt_reason' => [
                'string',
                'nullable',
            ],
            'appt_result_code_description' => [
                'string',
                'nullable',
            ],
            'id_appt_type' => [
                'string',
                'nullable',
            ],
            'ms_id_appt_type' => [
                'string',
                'nullable',
            ],
            'ms_id_appt' => [
                'string',
                'nullable',
            ],
            'appt_sales_1_emp' => [
                'string',
                'nullable',
            ],
            'appt_subject' => [
                'string',
                'nullable',
            ],
            'ms_appt_set_by' => [
                'string',
                'nullable',
            ],
            'confirmation_activity' => [
                'string',
                'nullable',
            ],
            'is_active' => [
                'required',
            ],
        ];
    }
}

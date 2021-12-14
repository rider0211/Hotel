<?php

namespace App\Http\Requests;

use App\Models\ActivityType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateActivityTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('activity_type_edit');
    }

    public function rules()
    {
        return [
            'act_type' => [
                'string',
                'required',
            ],
            'due_by' => [
                'required',
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
            ],
        ];
    }
}

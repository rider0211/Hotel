<?php

namespace App\Http\Requests;

use App\Models\ActivityReference;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreActivityReferenceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('activity_reference_create');
    }

    public function rules()
    {
        return [
            'act_due_by' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'refer_name' => [
                'string',
                'required',
            ],
        ];
    }
}

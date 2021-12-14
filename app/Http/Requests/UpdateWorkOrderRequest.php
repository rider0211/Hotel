<?php

namespace App\Http\Requests;

use App\Models\WorkOrder;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateWorkOrderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('work_order_edit');
    }

    public function rules()
    {
        return [
            'swo_title' => [
                'string',
                'nullable',
            ],
        ];
    }
}

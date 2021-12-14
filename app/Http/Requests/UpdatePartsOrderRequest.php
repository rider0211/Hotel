<?php

namespace App\Http\Requests;

use App\Models\PartsOrder;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePartsOrderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('parts_order_edit');
    }

    public function rules()
    {
        return [
            'realed_job_id' => [
                'required',
                'integer',
            ],
        ];
    }
}

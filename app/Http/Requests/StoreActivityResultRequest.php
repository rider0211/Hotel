<?php

namespace App\Http\Requests;

use App\Models\ActivityResult;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreActivityResultRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('activity_result_create');
    }

    public function rules()
    {
        return [
            'result' => [
                'string',
                'nullable',
            ],
        ];
    }
}

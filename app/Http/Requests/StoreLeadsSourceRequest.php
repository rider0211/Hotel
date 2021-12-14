<?php

namespace App\Http\Requests;

use App\Models\LeadsSource;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLeadsSourceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('leads_source_create');
    }

    public function rules()
    {
        return [
            'source_name' => [
                'string',
                'required',
            ],
        ];
    }
}

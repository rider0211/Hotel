<?php

namespace App\Http\Requests;

use App\Models\LeadsSource;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLeadsSourceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('leads_source_edit');
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

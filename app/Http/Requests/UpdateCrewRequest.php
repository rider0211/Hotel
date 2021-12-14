<?php

namespace App\Http\Requests;

use App\Models\Crew;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCrewRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('crew_edit');
    }

    public function rules()
    {
        return [
            'crew_name' => [
                'string',
                'required',
            ],
            'crew_color' => [
                'string',
                'nullable',
            ],
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\LeadFile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLeadFileRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('lead_file_create');
    }

    public function rules()
    {
        return [
            'jfile_title' => [
                'string',
                'required',
            ],
            'jfile_name' => [
                'array',
            ],
            'jfile_photo' => [
                'array',
            ],
        ];
    }
}

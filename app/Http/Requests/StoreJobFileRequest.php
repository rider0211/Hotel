<?php

namespace App\Http\Requests;

use App\Models\JobFile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreJobFileRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('job_file_create');
    }

    public function rules()
    {
        return [
            'jfile_name' => [
                'array',
            ],
            'jfile_photo' => [
                'array',
            ],
        ];
    }
}

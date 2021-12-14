<?php

namespace App\Http\Requests;

use App\Models\JobFile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyJobFileRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('job_file_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:job_files,id',
        ];
    }
}

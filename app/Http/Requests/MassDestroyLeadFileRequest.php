<?php

namespace App\Http\Requests;

use App\Models\LeadFile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLeadFileRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('lead_file_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:lead_files,id',
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\JobNote;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyJobNoteRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('job_note_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:job_notes,id',
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\LeadNote;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLeadNoteRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('lead_note_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:lead_notes,id',
        ];
    }
}

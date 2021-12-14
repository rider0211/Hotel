<?php

namespace App\Http\Requests;

use App\Models\LeadNote;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLeadNoteRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('lead_note_edit');
    }

    public function rules()
    {
        return [];
    }
}

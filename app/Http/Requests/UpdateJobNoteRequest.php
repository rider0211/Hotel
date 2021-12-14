<?php

namespace App\Http\Requests;

use App\Models\JobNote;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateJobNoteRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('job_note_edit');
    }

    public function rules()
    {
        return [];
    }
}

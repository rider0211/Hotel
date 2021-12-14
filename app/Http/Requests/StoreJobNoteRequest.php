<?php

namespace App\Http\Requests;

use App\Models\JobNote;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreJobNoteRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('job_note_create');
    }

    public function rules()
    {
        return [];
    }
}

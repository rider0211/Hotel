<?php

namespace App\Http\Requests;

use App\Models\Crew;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCrewRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('crew_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:crews,id',
        ];
    }
}

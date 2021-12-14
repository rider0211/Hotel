<?php

namespace App\Http\Requests;

use App\Models\ActivityResult;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyActivityResultRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('activity_result_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:activity_results,id',
        ];
    }
}

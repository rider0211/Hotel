<?php

namespace App\Http\Requests;

use App\Models\PartsOrder;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPartsOrderRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('parts_order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:parts_orders,id',
        ];
    }
}

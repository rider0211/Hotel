<?php

namespace App\Http\Requests;

use App\Models\ChangeOrder;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyChangeOrderRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('change_order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:change_orders,id',
        ];
    }
}

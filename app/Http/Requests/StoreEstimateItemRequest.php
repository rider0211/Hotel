<?php

namespace App\Http\Requests;

use App\Models\EstimateItem;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEstimateItemRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('estimate_item_create');
    }

    public function rules()
    {
        return [
            'item_code' => [
                'string',
                'nullable',
            ],
            'item_name' => [
                'string',
                'nullable',
            ],
            'est_item_quantity' => [
                'string',
                'nullable',
            ],
            'est_item_price' => [
                'string',
                'nullable',
            ],
            'est_item_final_amount' => [
                'string',
                'nullable',
            ],
            'est_item_listprice' => [
                'string',
                'nullable',
            ],
            'est_item_venfactor' => [
                'string',
                'nullable',
            ],
            'est_item_factor_2' => [
                'string',
                'nullable',
            ],
            'est_item_factor_3' => [
                'string',
                'nullable',
            ],
            'est_item_margin' => [
                'string',
                'nullable',
            ],
            'est_item_cost' => [
                'string',
                'nullable',
            ],
            'est_item_profit' => [
                'string',
                'nullable',
            ],
            'est_extenditem_detail' => [
                'string',
                'nullable',
            ],
            'est_price_detail' => [
                'string',
                'nullable',
            ],
        ];
    }
}

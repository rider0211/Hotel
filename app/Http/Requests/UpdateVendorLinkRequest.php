<?php

namespace App\Http\Requests;

use App\Models\VendorLink;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateVendorLinkRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('vendor_link_edit');
    }

    public function rules()
    {
        return [
            'ven_link' => [
                'string',
                'nullable',
            ],
            'vlink_type' => [
                'required',
            ],
        ];
    }
}

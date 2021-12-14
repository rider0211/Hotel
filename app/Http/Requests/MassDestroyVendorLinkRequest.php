<?php

namespace App\Http\Requests;

use App\Models\VendorLink;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVendorLinkRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('vendor_link_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:vendor_links,id',
        ];
    }
}

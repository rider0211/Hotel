<?php

namespace App\Http\Requests;

use App\Models\VendorFile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVendorFileRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('vendor_file_create');
    }

    public function rules()
    {
        return [
            'vfile_name' => [
                'string',
                'required',
            ],
            'ven_file' => [
                'required',
            ],
        ];
    }
}

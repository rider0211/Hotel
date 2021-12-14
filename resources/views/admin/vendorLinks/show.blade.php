@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.vendorLink.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vendor-links.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.vendorLink.fields.id') }}
                        </th>
                        <td>
                            {{ $vendorLink->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vendorLink.fields.ven_link') }}
                        </th>
                        <td>
                            {{ $vendorLink->ven_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.vendorLink.fields.vlink_type') }}
                        </th>
                        <td>
                            {{ App\Models\VendorLink::VLINK_TYPE_SELECT[$vendorLink->vlink_type] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vendor-links.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.vendorLink.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.vendor-links.update", [$vendorLink->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="ven_link">{{ trans('cruds.vendorLink.fields.ven_link') }}</label>
                <input class="form-control {{ $errors->has('ven_link') ? 'is-invalid' : '' }}" type="text" name="ven_link" id="ven_link" value="{{ old('ven_link', $vendorLink->ven_link) }}">
                @if($errors->has('ven_link'))
                    <span class="text-danger">{{ $errors->first('ven_link') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vendorLink.fields.ven_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.vendorLink.fields.vlink_type') }}</label>
                <select class="form-control {{ $errors->has('vlink_type') ? 'is-invalid' : '' }}" name="vlink_type" id="vlink_type" required>
                    <option value disabled {{ old('vlink_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\VendorLink::VLINK_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('vlink_type', $vendorLink->vlink_type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('vlink_type'))
                    <span class="text-danger">{{ $errors->first('vlink_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.vendorLink.fields.vlink_type_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
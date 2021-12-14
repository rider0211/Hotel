@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.receiving.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.receivings.update", [$receiving->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="rcv_vendor">{{ trans('cruds.receiving.fields.rcv_vendor') }}</label>
                <input class="form-control {{ $errors->has('rcv_vendor') ? 'is-invalid' : '' }}" type="text" name="rcv_vendor" id="rcv_vendor" value="{{ old('rcv_vendor', $receiving->rcv_vendor) }}" required>
                @if($errors->has('rcv_vendor'))
                    <span class="text-danger">{{ $errors->first('rcv_vendor') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receiving.fields.rcv_vendor_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rcv_expected">{{ trans('cruds.receiving.fields.rcv_expected') }}</label>
                <input class="form-control date {{ $errors->has('rcv_expected') ? 'is-invalid' : '' }}" type="text" name="rcv_expected" id="rcv_expected" value="{{ old('rcv_expected', $receiving->rcv_expected) }}">
                @if($errors->has('rcv_expected'))
                    <span class="text-danger">{{ $errors->first('rcv_expected') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receiving.fields.rcv_expected_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rcv_received">{{ trans('cruds.receiving.fields.rcv_received') }}</label>
                <input class="form-control date {{ $errors->has('rcv_received') ? 'is-invalid' : '' }}" type="text" name="rcv_received" id="rcv_received" value="{{ old('rcv_received', $receiving->rcv_received) }}">
                @if($errors->has('rcv_received'))
                    <span class="text-danger">{{ $errors->first('rcv_received') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.receiving.fields.rcv_received_helper') }}</span>
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
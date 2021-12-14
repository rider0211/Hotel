@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.receiving.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.receivings.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="rcv_vendor">{{ trans('cruds.receiving.fields.rcv_vendor') }}</label>
                            <input class="form-control" type="text" name="rcv_vendor" id="rcv_vendor" value="{{ old('rcv_vendor', '') }}" required>
                            @if($errors->has('rcv_vendor'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('rcv_vendor') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.receiving.fields.rcv_vendor_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="rcv_expected">{{ trans('cruds.receiving.fields.rcv_expected') }}</label>
                            <input class="form-control date" type="text" name="rcv_expected" id="rcv_expected" value="{{ old('rcv_expected') }}">
                            @if($errors->has('rcv_expected'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('rcv_expected') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.receiving.fields.rcv_expected_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="rcv_received">{{ trans('cruds.receiving.fields.rcv_received') }}</label>
                            <input class="form-control date" type="text" name="rcv_received" id="rcv_received" value="{{ old('rcv_received') }}">
                            @if($errors->has('rcv_received'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('rcv_received') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection
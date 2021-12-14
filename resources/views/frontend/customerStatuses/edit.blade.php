@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.customerStatus.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.customer-statuses.update", [$customerStatus->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="cs_status">{{ trans('cruds.customerStatus.fields.cs_status') }}</label>
                            <input class="form-control" type="text" name="cs_status" id="cs_status" value="{{ old('cs_status', $customerStatus->cs_status) }}">
                            @if($errors->has('cs_status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cs_status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.customerStatus.fields.cs_status_helper') }}</span>
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
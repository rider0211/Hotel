@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.workOrder.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.work-orders.update", [$workOrder->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="swo_title">{{ trans('cruds.workOrder.fields.swo_title') }}</label>
                            <input class="form-control" type="text" name="swo_title" id="swo_title" value="{{ old('swo_title', $workOrder->swo_title) }}">
                            @if($errors->has('swo_title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('swo_title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.workOrder.fields.swo_title_helper') }}</span>
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
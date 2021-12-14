@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.workOrder.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.work-orders.update", [$workOrder->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="swo_title">{{ trans('cruds.workOrder.fields.swo_title') }}</label>
                <input class="form-control {{ $errors->has('swo_title') ? 'is-invalid' : '' }}" type="text" name="swo_title" id="swo_title" value="{{ old('swo_title', $workOrder->swo_title) }}">
                @if($errors->has('swo_title'))
                    <span class="text-danger">{{ $errors->first('swo_title') }}</span>
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



@endsection
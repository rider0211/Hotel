@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.customerStatus.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.customer-statuses.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="cs_status">{{ trans('cruds.customerStatus.fields.cs_status') }}</label>
                <input class="form-control {{ $errors->has('cs_status') ? 'is-invalid' : '' }}" type="text" name="cs_status" id="cs_status" value="{{ old('cs_status', '') }}">
                @if($errors->has('cs_status'))
                    <span class="text-danger">{{ $errors->first('cs_status') }}</span>
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



@endsection
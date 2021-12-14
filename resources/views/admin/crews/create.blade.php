@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crew.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.crews.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="crew_name">{{ trans('cruds.crew.fields.crew_name') }}</label>
                <input class="form-control {{ $errors->has('crew_name') ? 'is-invalid' : '' }}" type="text" name="crew_name" id="crew_name" value="{{ old('crew_name', '') }}" required>
                @if($errors->has('crew_name'))
                    <span class="text-danger">{{ $errors->first('crew_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crew.fields.crew_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crew_color">{{ trans('cruds.crew.fields.crew_color') }}</label>
                <input class="form-control {{ $errors->has('crew_color') ? 'is-invalid' : '' }}" type="text" name="crew_color" id="crew_color" value="{{ old('crew_color', '') }}">
                @if($errors->has('crew_color'))
                    <span class="text-danger">{{ $errors->first('crew_color') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crew.fields.crew_color_helper') }}</span>
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
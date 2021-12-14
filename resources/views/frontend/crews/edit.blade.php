@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.crew.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.crews.update", [$crew->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="crew_name">{{ trans('cruds.crew.fields.crew_name') }}</label>
                            <input class="form-control" type="text" name="crew_name" id="crew_name" value="{{ old('crew_name', $crew->crew_name) }}" required>
                            @if($errors->has('crew_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('crew_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.crew.fields.crew_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="crew_color">{{ trans('cruds.crew.fields.crew_color') }}</label>
                            <input class="form-control" type="text" name="crew_color" id="crew_color" value="{{ old('crew_color', $crew->crew_color) }}">
                            @if($errors->has('crew_color'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('crew_color') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection
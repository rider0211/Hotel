@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.activityType.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.activity-types.update", [$activityType->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="act_type">{{ trans('cruds.activityType.fields.act_type') }}</label>
                            <input class="form-control" type="text" name="act_type" id="act_type" value="{{ old('act_type', $activityType->act_type) }}" required>
                            @if($errors->has('act_type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('act_type') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.activityType.fields.act_type_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="due_by">{{ trans('cruds.activityType.fields.due_by') }}</label>
                            <input class="form-control datetime" type="text" name="due_by" id="due_by" value="{{ old('due_by', $activityType->due_by) }}" required>
                            @if($errors->has('due_by'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('due_by') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.activityType.fields.due_by_helper') }}</span>
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
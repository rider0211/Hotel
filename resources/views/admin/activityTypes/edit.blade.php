@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.activityType.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.activity-types.update", [$activityType->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="act_type">{{ trans('cruds.activityType.fields.act_type') }}</label>
                <input class="form-control {{ $errors->has('act_type') ? 'is-invalid' : '' }}" type="text" name="act_type" id="act_type" value="{{ old('act_type', $activityType->act_type) }}" required>
                @if($errors->has('act_type'))
                    <span class="text-danger">{{ $errors->first('act_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activityType.fields.act_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="due_by">{{ trans('cruds.activityType.fields.due_by') }}</label>
                <input class="form-control datetime {{ $errors->has('due_by') ? 'is-invalid' : '' }}" type="text" name="due_by" id="due_by" value="{{ old('due_by', $activityType->due_by) }}" required>
                @if($errors->has('due_by'))
                    <span class="text-danger">{{ $errors->first('due_by') }}</span>
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



@endsection
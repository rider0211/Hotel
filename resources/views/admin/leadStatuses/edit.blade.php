@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.leadStatus.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.lead-statuses.update", [$leadStatus->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="lead_stat">{{ trans('cruds.leadStatus.fields.lead_stat') }}</label>
                <input class="form-control {{ $errors->has('lead_stat') ? 'is-invalid' : '' }}" type="text" name="lead_stat" id="lead_stat" value="{{ old('lead_stat', $leadStatus->lead_stat) }}" required>
                @if($errors->has('lead_stat'))
                    <span class="text-danger">{{ $errors->first('lead_stat') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.leadStatus.fields.lead_stat_helper') }}</span>
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
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.leadsSource.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.leads-sources.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="source_name">{{ trans('cruds.leadsSource.fields.source_name') }}</label>
                <input class="form-control {{ $errors->has('source_name') ? 'is-invalid' : '' }}" type="text" name="source_name" id="source_name" value="{{ old('source_name', '') }}" required>
                @if($errors->has('source_name'))
                    <span class="text-danger">{{ $errors->first('source_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.leadsSource.fields.source_name_helper') }}</span>
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
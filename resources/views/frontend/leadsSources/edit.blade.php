@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.leadsSource.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.leads-sources.update", [$leadsSource->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="source_name">{{ trans('cruds.leadsSource.fields.source_name') }}</label>
                            <input class="form-control" type="text" name="source_name" id="source_name" value="{{ old('source_name', $leadsSource->source_name) }}" required>
                            @if($errors->has('source_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('source_name') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection
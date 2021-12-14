@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.leadStatus.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.lead-statuses.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="lead_stat">{{ trans('cruds.leadStatus.fields.lead_stat') }}</label>
                            <input class="form-control" type="text" name="lead_stat" id="lead_stat" value="{{ old('lead_stat', '') }}" required>
                            @if($errors->has('lead_stat'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lead_stat') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection
@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.partsOrder.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.parts-orders.update", [$partsOrder->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="realed_job_id">{{ trans('cruds.partsOrder.fields.realed_job') }}</label>
                            <select class="form-control select2" name="realed_job_id" id="realed_job_id" required>
                                @foreach($realed_jobs as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('realed_job_id') ? old('realed_job_id') : $partsOrder->realed_job->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('realed_job'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('realed_job') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.partsOrder.fields.realed_job_helper') }}</span>
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
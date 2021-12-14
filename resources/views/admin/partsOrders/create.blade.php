@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.partsOrder.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.parts-orders.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="realed_job_id">{{ trans('cruds.partsOrder.fields.realed_job') }}</label>
                <select class="form-control select2 {{ $errors->has('realed_job') ? 'is-invalid' : '' }}" name="realed_job_id" id="realed_job_id" required>
                    @foreach($realed_jobs as $id => $entry)
                        <option value="{{ $id }}" {{ old('realed_job_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('realed_job'))
                    <span class="text-danger">{{ $errors->first('realed_job') }}</span>
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



@endsection
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.contract.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.contracts.update", [$contract->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="ctr_name">{{ trans('cruds.contract.fields.ctr_name') }}</label>
                <input class="form-control {{ $errors->has('ctr_name') ? 'is-invalid' : '' }}" type="text" name="ctr_name" id="ctr_name" value="{{ old('ctr_name', $contract->ctr_name) }}">
                @if($errors->has('ctr_name'))
                    <span class="text-danger">{{ $errors->first('ctr_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contract.fields.ctr_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job">{{ trans('cruds.contract.fields.job') }}</label>
                <input class="form-control {{ $errors->has('job') ? 'is-invalid' : '' }}" type="text" name="job" id="job" value="{{ old('job', $contract->job) }}">
                @if($errors->has('job'))
                    <span class="text-danger">{{ $errors->first('job') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contract.fields.job_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contract_date">{{ trans('cruds.contract.fields.contract_date') }}</label>
                <input class="form-control {{ $errors->has('contract_date') ? 'is-invalid' : '' }}" type="text" name="contract_date" id="contract_date" value="{{ old('contract_date', $contract->contract_date) }}">
                @if($errors->has('contract_date'))
                    <span class="text-danger">{{ $errors->first('contract_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contract.fields.contract_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contract_status">{{ trans('cruds.contract.fields.contract_status') }}</label>
                <input class="form-control {{ $errors->has('contract_status') ? 'is-invalid' : '' }}" type="text" name="contract_status" id="contract_status" value="{{ old('contract_status', $contract->contract_status) }}">
                @if($errors->has('contract_status'))
                    <span class="text-danger">{{ $errors->first('contract_status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contract.fields.contract_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contract_date_complete">{{ trans('cruds.contract.fields.contract_date_complete') }}</label>
                <input class="form-control {{ $errors->has('contract_date_complete') ? 'is-invalid' : '' }}" type="text" name="contract_date_complete" id="contract_date_complete" value="{{ old('contract_date_complete', $contract->contract_date_complete) }}">
                @if($errors->has('contract_date_complete'))
                    <span class="text-danger">{{ $errors->first('contract_date_complete') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contract.fields.contract_date_complete_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="is_active">{{ trans('cruds.contract.fields.is_active') }}</label>
                <input class="form-control {{ $errors->has('is_active') ? 'is-invalid' : '' }}" type="text" name="is_active" id="is_active" value="{{ old('is_active', $contract->is_active) }}">
                @if($errors->has('is_active'))
                    <span class="text-danger">{{ $errors->first('is_active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contract.fields.is_active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_update">{{ trans('cruds.contract.fields.last_update') }}</label>
                <input class="form-control {{ $errors->has('last_update') ? 'is-invalid' : '' }}" type="text" name="last_update" id="last_update" value="{{ old('last_update', $contract->last_update) }}">
                @if($errors->has('last_update'))
                    <span class="text-danger">{{ $errors->first('last_update') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contract.fields.last_update_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_updateby">{{ trans('cruds.contract.fields.last_updateby') }}</label>
                <input class="form-control {{ $errors->has('last_updateby') ? 'is-invalid' : '' }}" type="text" name="last_updateby" id="last_updateby" value="{{ old('last_updateby', $contract->last_updateby) }}">
                @if($errors->has('last_updateby'))
                    <span class="text-danger">{{ $errors->first('last_updateby') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.contract.fields.last_updateby_helper') }}</span>
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
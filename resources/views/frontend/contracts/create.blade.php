@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.contract.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.contracts.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="ctr_name">{{ trans('cruds.contract.fields.ctr_name') }}</label>
                            <input class="form-control" type="text" name="ctr_name" id="ctr_name" value="{{ old('ctr_name', '') }}">
                            @if($errors->has('ctr_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ctr_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.ctr_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job">{{ trans('cruds.contract.fields.job') }}</label>
                            <input class="form-control" type="text" name="job" id="job" value="{{ old('job', '') }}">
                            @if($errors->has('job'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.job_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="contract_date">{{ trans('cruds.contract.fields.contract_date') }}</label>
                            <input class="form-control" type="text" name="contract_date" id="contract_date" value="{{ old('contract_date', '') }}">
                            @if($errors->has('contract_date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('contract_date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.contract_date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="contract_status">{{ trans('cruds.contract.fields.contract_status') }}</label>
                            <input class="form-control" type="text" name="contract_status" id="contract_status" value="{{ old('contract_status', '') }}">
                            @if($errors->has('contract_status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('contract_status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.contract_status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="contract_date_complete">{{ trans('cruds.contract.fields.contract_date_complete') }}</label>
                            <input class="form-control" type="text" name="contract_date_complete" id="contract_date_complete" value="{{ old('contract_date_complete', '') }}">
                            @if($errors->has('contract_date_complete'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('contract_date_complete') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.contract_date_complete_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="is_active">{{ trans('cruds.contract.fields.is_active') }}</label>
                            <input class="form-control" type="text" name="is_active" id="is_active" value="{{ old('is_active', '') }}">
                            @if($errors->has('is_active'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('is_active') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.is_active_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="last_update">{{ trans('cruds.contract.fields.last_update') }}</label>
                            <input class="form-control" type="text" name="last_update" id="last_update" value="{{ old('last_update', '') }}">
                            @if($errors->has('last_update'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('last_update') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.contract.fields.last_update_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="last_updateby">{{ trans('cruds.contract.fields.last_updateby') }}</label>
                            <input class="form-control" type="text" name="last_updateby" id="last_updateby" value="{{ old('last_updateby', '') }}">
                            @if($errors->has('last_updateby'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('last_updateby') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection
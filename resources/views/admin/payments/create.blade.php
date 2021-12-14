@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.payment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.payments.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="pay_amount">{{ trans('cruds.payment.fields.pay_amount') }}</label>
                <input class="form-control {{ $errors->has('pay_amount') ? 'is-invalid' : '' }}" type="text" name="pay_amount" id="pay_amount" value="{{ old('pay_amount', '') }}">
                @if($errors->has('pay_amount'))
                    <span class="text-danger">{{ $errors->first('pay_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.pay_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job">{{ trans('cruds.payment.fields.job') }}</label>
                <input class="form-control {{ $errors->has('job') ? 'is-invalid' : '' }}" type="text" name="job" id="job" value="{{ old('job', '') }}">
                @if($errors->has('job'))
                    <span class="text-danger">{{ $errors->first('job') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.job_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company">{{ trans('cruds.payment.fields.company') }}</label>
                <input class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" type="text" name="company" id="company" value="{{ old('company', '') }}">
                @if($errors->has('company'))
                    <span class="text-danger">{{ $errors->first('company') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.company_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_type">{{ trans('cruds.payment.fields.payment_type') }}</label>
                <input class="form-control {{ $errors->has('payment_type') ? 'is-invalid' : '' }}" type="text" name="payment_type" id="payment_type" value="{{ old('payment_type', '') }}">
                @if($errors->has('payment_type'))
                    <span class="text-danger">{{ $errors->first('payment_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.payment_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contract">{{ trans('cruds.payment.fields.contract') }}</label>
                <input class="form-control {{ $errors->has('contract') ? 'is-invalid' : '' }}" type="text" name="contract" id="contract" value="{{ old('contract', '') }}">
                @if($errors->has('contract'))
                    <span class="text-danger">{{ $errors->first('contract') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.contract_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_amount">{{ trans('cruds.payment.fields.payment_amount') }}</label>
                <input class="form-control {{ $errors->has('payment_amount') ? 'is-invalid' : '' }}" type="text" name="payment_amount" id="payment_amount" value="{{ old('payment_amount', '') }}">
                @if($errors->has('payment_amount'))
                    <span class="text-danger">{{ $errors->first('payment_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.payment_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_method">{{ trans('cruds.payment.fields.payment_method') }}</label>
                <input class="form-control {{ $errors->has('payment_method') ? 'is-invalid' : '' }}" type="text" name="payment_method" id="payment_method" value="{{ old('payment_method', '') }}">
                @if($errors->has('payment_method'))
                    <span class="text-danger">{{ $errors->first('payment_method') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.payment_method_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_description">{{ trans('cruds.payment.fields.payment_description') }}</label>
                <input class="form-control {{ $errors->has('payment_description') ? 'is-invalid' : '' }}" type="text" name="payment_description" id="payment_description" value="{{ old('payment_description', '') }}">
                @if($errors->has('payment_description'))
                    <span class="text-danger">{{ $errors->first('payment_description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.payment_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_date_time">{{ trans('cruds.payment.fields.payment_date_time') }}</label>
                <input class="form-control {{ $errors->has('payment_date_time') ? 'is-invalid' : '' }}" type="text" name="payment_date_time" id="payment_date_time" value="{{ old('payment_date_time', '') }}">
                @if($errors->has('payment_date_time'))
                    <span class="text-danger">{{ $errors->first('payment_date_time') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.payment_date_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="payment_cc_no">{{ trans('cruds.payment.fields.payment_cc_no') }}</label>
                <input class="form-control {{ $errors->has('payment_cc_no') ? 'is-invalid' : '' }}" type="text" name="payment_cc_no" id="payment_cc_no" value="{{ old('payment_cc_no', '') }}">
                @if($errors->has('payment_cc_no'))
                    <span class="text-danger">{{ $errors->first('payment_cc_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.payment_cc_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="applies_to_contract">{{ trans('cruds.payment.fields.applies_to_contract') }}</label>
                <input class="form-control {{ $errors->has('applies_to_contract') ? 'is-invalid' : '' }}" type="text" name="applies_to_contract" id="applies_to_contract" value="{{ old('applies_to_contract', '') }}">
                @if($errors->has('applies_to_contract'))
                    <span class="text-danger">{{ $errors->first('applies_to_contract') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.applies_to_contract_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cashfinance">{{ trans('cruds.payment.fields.cashfinance') }}</label>
                <input class="form-control {{ $errors->has('cashfinance') ? 'is-invalid' : '' }}" type="text" name="cashfinance" id="cashfinance" value="{{ old('cashfinance', '') }}">
                @if($errors->has('cashfinance'))
                    <span class="text-danger">{{ $errors->first('cashfinance') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.cashfinance_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="is_active">{{ trans('cruds.payment.fields.is_active') }}</label>
                <input class="form-control {{ $errors->has('is_active') ? 'is-invalid' : '' }}" type="text" name="is_active" id="is_active" value="{{ old('is_active', '') }}">
                @if($errors->has('is_active'))
                    <span class="text-danger">{{ $errors->first('is_active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.is_active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_updateby">{{ trans('cruds.payment.fields.last_updateby') }}</label>
                <input class="form-control {{ $errors->has('last_updateby') ? 'is-invalid' : '' }}" type="text" name="last_updateby" id="last_updateby" value="{{ old('last_updateby', '') }}">
                @if($errors->has('last_updateby'))
                    <span class="text-danger">{{ $errors->first('last_updateby') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.last_updateby_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_update">{{ trans('cruds.payment.fields.last_update') }}</label>
                <input class="form-control {{ $errors->has('last_update') ? 'is-invalid' : '' }}" type="text" name="last_update" id="last_update" value="{{ old('last_update', '') }}">
                @if($errors->has('last_update'))
                    <span class="text-danger">{{ $errors->first('last_update') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.last_update_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="paysimple_payment">{{ trans('cruds.payment.fields.paysimple_payment') }}</label>
                <input class="form-control {{ $errors->has('paysimple_payment') ? 'is-invalid' : '' }}" type="text" name="paysimple_payment" id="paysimple_payment" value="{{ old('paysimple_payment', '') }}">
                @if($errors->has('paysimple_payment'))
                    <span class="text-danger">{{ $errors->first('paysimple_payment') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.payment.fields.paysimple_payment_helper') }}</span>
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
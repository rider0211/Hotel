@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.payment.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.payments.update", [$payment->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="pay_amount">{{ trans('cruds.payment.fields.pay_amount') }}</label>
                            <input class="form-control" type="text" name="pay_amount" id="pay_amount" value="{{ old('pay_amount', $payment->pay_amount) }}">
                            @if($errors->has('pay_amount'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('pay_amount') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.pay_amount_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="job">{{ trans('cruds.payment.fields.job') }}</label>
                            <input class="form-control" type="text" name="job" id="job" value="{{ old('job', $payment->job) }}">
                            @if($errors->has('job'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.job_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="company">{{ trans('cruds.payment.fields.company') }}</label>
                            <input class="form-control" type="text" name="company" id="company" value="{{ old('company', $payment->company) }}">
                            @if($errors->has('company'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('company') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.company_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="payment_type">{{ trans('cruds.payment.fields.payment_type') }}</label>
                            <input class="form-control" type="text" name="payment_type" id="payment_type" value="{{ old('payment_type', $payment->payment_type) }}">
                            @if($errors->has('payment_type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('payment_type') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.payment_type_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="contract">{{ trans('cruds.payment.fields.contract') }}</label>
                            <input class="form-control" type="text" name="contract" id="contract" value="{{ old('contract', $payment->contract) }}">
                            @if($errors->has('contract'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('contract') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.contract_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="payment_amount">{{ trans('cruds.payment.fields.payment_amount') }}</label>
                            <input class="form-control" type="text" name="payment_amount" id="payment_amount" value="{{ old('payment_amount', $payment->payment_amount) }}">
                            @if($errors->has('payment_amount'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('payment_amount') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.payment_amount_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="payment_method">{{ trans('cruds.payment.fields.payment_method') }}</label>
                            <input class="form-control" type="text" name="payment_method" id="payment_method" value="{{ old('payment_method', $payment->payment_method) }}">
                            @if($errors->has('payment_method'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('payment_method') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.payment_method_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="payment_description">{{ trans('cruds.payment.fields.payment_description') }}</label>
                            <input class="form-control" type="text" name="payment_description" id="payment_description" value="{{ old('payment_description', $payment->payment_description) }}">
                            @if($errors->has('payment_description'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('payment_description') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.payment_description_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="payment_date_time">{{ trans('cruds.payment.fields.payment_date_time') }}</label>
                            <input class="form-control" type="text" name="payment_date_time" id="payment_date_time" value="{{ old('payment_date_time', $payment->payment_date_time) }}">
                            @if($errors->has('payment_date_time'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('payment_date_time') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.payment_date_time_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="payment_cc_no">{{ trans('cruds.payment.fields.payment_cc_no') }}</label>
                            <input class="form-control" type="text" name="payment_cc_no" id="payment_cc_no" value="{{ old('payment_cc_no', $payment->payment_cc_no) }}">
                            @if($errors->has('payment_cc_no'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('payment_cc_no') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.payment_cc_no_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="applies_to_contract">{{ trans('cruds.payment.fields.applies_to_contract') }}</label>
                            <input class="form-control" type="text" name="applies_to_contract" id="applies_to_contract" value="{{ old('applies_to_contract', $payment->applies_to_contract) }}">
                            @if($errors->has('applies_to_contract'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('applies_to_contract') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.applies_to_contract_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cashfinance">{{ trans('cruds.payment.fields.cashfinance') }}</label>
                            <input class="form-control" type="text" name="cashfinance" id="cashfinance" value="{{ old('cashfinance', $payment->cashfinance) }}">
                            @if($errors->has('cashfinance'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cashfinance') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.cashfinance_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="is_active">{{ trans('cruds.payment.fields.is_active') }}</label>
                            <input class="form-control" type="text" name="is_active" id="is_active" value="{{ old('is_active', $payment->is_active) }}">
                            @if($errors->has('is_active'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('is_active') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.is_active_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="last_updateby">{{ trans('cruds.payment.fields.last_updateby') }}</label>
                            <input class="form-control" type="text" name="last_updateby" id="last_updateby" value="{{ old('last_updateby', $payment->last_updateby) }}">
                            @if($errors->has('last_updateby'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('last_updateby') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.last_updateby_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="last_update">{{ trans('cruds.payment.fields.last_update') }}</label>
                            <input class="form-control" type="text" name="last_update" id="last_update" value="{{ old('last_update', $payment->last_update) }}">
                            @if($errors->has('last_update'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('last_update') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.payment.fields.last_update_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="paysimple_payment">{{ trans('cruds.payment.fields.paysimple_payment') }}</label>
                            <input class="form-control" type="text" name="paysimple_payment" id="paysimple_payment" value="{{ old('paysimple_payment', $payment->paysimple_payment) }}">
                            @if($errors->has('paysimple_payment'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('paysimple_payment') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection
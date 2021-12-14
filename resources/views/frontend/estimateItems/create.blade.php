@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.estimateItem.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.estimate-items.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="item_code">{{ trans('cruds.estimateItem.fields.item_code') }}</label>
                            <input class="form-control" type="text" name="item_code" id="item_code" value="{{ old('item_code', '') }}">
                            @if($errors->has('item_code'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('item_code') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.item_code_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="item_name">{{ trans('cruds.estimateItem.fields.item_name') }}</label>
                            <input class="form-control" type="text" name="item_name" id="item_name" value="{{ old('item_name', '') }}">
                            @if($errors->has('item_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('item_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.item_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="est_item_quantity">{{ trans('cruds.estimateItem.fields.est_item_quantity') }}</label>
                            <input class="form-control" type="text" name="est_item_quantity" id="est_item_quantity" value="{{ old('est_item_quantity', '') }}">
                            @if($errors->has('est_item_quantity'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('est_item_quantity') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.est_item_quantity_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="est_item_price">{{ trans('cruds.estimateItem.fields.est_item_price') }}</label>
                            <input class="form-control" type="text" name="est_item_price" id="est_item_price" value="{{ old('est_item_price', '') }}">
                            @if($errors->has('est_item_price'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('est_item_price') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.est_item_price_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="est_item_final_amount">{{ trans('cruds.estimateItem.fields.est_item_final_amount') }}</label>
                            <input class="form-control" type="text" name="est_item_final_amount" id="est_item_final_amount" value="{{ old('est_item_final_amount', '') }}">
                            @if($errors->has('est_item_final_amount'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('est_item_final_amount') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.est_item_final_amount_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="est_item_listprice">{{ trans('cruds.estimateItem.fields.est_item_listprice') }}</label>
                            <input class="form-control" type="text" name="est_item_listprice" id="est_item_listprice" value="{{ old('est_item_listprice', '') }}">
                            @if($errors->has('est_item_listprice'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('est_item_listprice') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.est_item_listprice_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="est_item_venfactor">{{ trans('cruds.estimateItem.fields.est_item_venfactor') }}</label>
                            <input class="form-control" type="text" name="est_item_venfactor" id="est_item_venfactor" value="{{ old('est_item_venfactor', '') }}">
                            @if($errors->has('est_item_venfactor'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('est_item_venfactor') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.est_item_venfactor_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="est_item_factor_2">{{ trans('cruds.estimateItem.fields.est_item_factor_2') }}</label>
                            <input class="form-control" type="text" name="est_item_factor_2" id="est_item_factor_2" value="{{ old('est_item_factor_2', '') }}">
                            @if($errors->has('est_item_factor_2'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('est_item_factor_2') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.est_item_factor_2_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="est_item_factor_3">{{ trans('cruds.estimateItem.fields.est_item_factor_3') }}</label>
                            <input class="form-control" type="text" name="est_item_factor_3" id="est_item_factor_3" value="{{ old('est_item_factor_3', '') }}">
                            @if($errors->has('est_item_factor_3'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('est_item_factor_3') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.est_item_factor_3_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="est_item_margin">{{ trans('cruds.estimateItem.fields.est_item_margin') }}</label>
                            <input class="form-control" type="text" name="est_item_margin" id="est_item_margin" value="{{ old('est_item_margin', '') }}">
                            @if($errors->has('est_item_margin'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('est_item_margin') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.est_item_margin_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="est_item_cost">{{ trans('cruds.estimateItem.fields.est_item_cost') }}</label>
                            <input class="form-control" type="text" name="est_item_cost" id="est_item_cost" value="{{ old('est_item_cost', '') }}">
                            @if($errors->has('est_item_cost'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('est_item_cost') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.est_item_cost_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="est_item_profit">{{ trans('cruds.estimateItem.fields.est_item_profit') }}</label>
                            <input class="form-control" type="text" name="est_item_profit" id="est_item_profit" value="{{ old('est_item_profit', '') }}">
                            @if($errors->has('est_item_profit'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('est_item_profit') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.est_item_profit_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="est_private_detail">{{ trans('cruds.estimateItem.fields.est_private_detail') }}</label>
                            <textarea class="form-control" name="est_private_detail" id="est_private_detail">{{ old('est_private_detail') }}</textarea>
                            @if($errors->has('est_private_detail'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('est_private_detail') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.est_private_detail_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="est_extenditem_detail">{{ trans('cruds.estimateItem.fields.est_extenditem_detail') }}</label>
                            <input class="form-control" type="text" name="est_extenditem_detail" id="est_extenditem_detail" value="{{ old('est_extenditem_detail', '') }}">
                            @if($errors->has('est_extenditem_detail'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('est_extenditem_detail') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.est_extenditem_detail_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="est_price_detail">{{ trans('cruds.estimateItem.fields.est_price_detail') }}</label>
                            <input class="form-control" type="text" name="est_price_detail" id="est_price_detail" value="{{ old('est_price_detail', '') }}">
                            @if($errors->has('est_price_detail'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('est_price_detail') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.estimateItem.fields.est_price_detail_helper') }}</span>
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
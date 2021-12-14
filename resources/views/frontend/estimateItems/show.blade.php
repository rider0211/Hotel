@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.estimateItem.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.estimate-items.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.item_code') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->item_code }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.item_name') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->item_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.est_item_quantity') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->est_item_quantity }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.est_item_price') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->est_item_price }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.est_item_final_amount') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->est_item_final_amount }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.est_item_listprice') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->est_item_listprice }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.est_item_venfactor') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->est_item_venfactor }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.est_item_factor_2') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->est_item_factor_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.est_item_factor_3') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->est_item_factor_3 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.est_item_margin') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->est_item_margin }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.est_item_cost') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->est_item_cost }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.est_item_profit') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->est_item_profit }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.est_private_detail') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->est_private_detail }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.est_extenditem_detail') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->est_extenditem_detail }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimateItem.fields.est_price_detail') }}
                                    </th>
                                    <td>
                                        {{ $estimateItem->est_price_detail }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.estimate-items.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
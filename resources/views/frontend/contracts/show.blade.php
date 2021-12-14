@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.contract.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.contracts.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $contract->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.ctr_name') }}
                                    </th>
                                    <td>
                                        {{ $contract->ctr_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.job') }}
                                    </th>
                                    <td>
                                        {{ $contract->job }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.contract_date') }}
                                    </th>
                                    <td>
                                        {{ $contract->contract_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.contract_status') }}
                                    </th>
                                    <td>
                                        {{ $contract->contract_status }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.contract_date_complete') }}
                                    </th>
                                    <td>
                                        {{ $contract->contract_date_complete }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.is_active') }}
                                    </th>
                                    <td>
                                        {{ $contract->is_active }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.last_update') }}
                                    </th>
                                    <td>
                                        {{ $contract->last_update }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contract.fields.last_updateby') }}
                                    </th>
                                    <td>
                                        {{ $contract->last_updateby }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.contracts.index') }}">
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
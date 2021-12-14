@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.receiving.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.receivings.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.receiving.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $receiving->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.receiving.fields.rcv_vendor') }}
                                    </th>
                                    <td>
                                        {{ $receiving->rcv_vendor }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.receiving.fields.rcv_expected') }}
                                    </th>
                                    <td>
                                        {{ $receiving->rcv_expected }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.receiving.fields.rcv_received') }}
                                    </th>
                                    <td>
                                        {{ $receiving->rcv_received }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.receivings.index') }}">
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
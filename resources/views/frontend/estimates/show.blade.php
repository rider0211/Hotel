@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.estimate.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.estimates.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $estimate->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_stat') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_stat }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_state') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Estimate::EST_STATE_SELECT[$estimate->est_state] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_county') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Estimate::EST_COUNTY_SELECT[$estimate->est_county] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_total_before_tax') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_total_before_tax }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_state_tax') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_state_tax }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_county_tax') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_county_tax }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_total_after_tax') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_total_after_tax }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_note') }}
                                    </th>
                                    <td>
                                        {!! $estimate->est_note !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.dep_calc_1') }}
                                    </th>
                                    <td>
                                        {{ $estimate->dep_calc_1 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.dep_calc_2') }}
                                    </th>
                                    <td>
                                        {{ $estimate->dep_calc_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.dep_calc_3') }}
                                    </th>
                                    <td>
                                        {{ $estimate->dep_calc_3 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_desposit_1') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_desposit_1 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_desposit_2') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_desposit_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_deposit_3') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_deposit_3 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_view_price') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $estimate->est_view_price ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_view_qty') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $estimate->est_view_qty ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_view_detail') }}
                                    </th>
                                    <td>
                                        <input type="checkbox" disabled="disabled" {{ $estimate->est_view_detail ? 'checked' : '' }}>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_cust_email_signed') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_cust_email_signed }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_cust_first_signed') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_cust_first_signed }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_cust_last_signed') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_cust_last_signed }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_sign') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_sign }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_sign_int') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_sign_int }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_approve_date') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_approve_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.estimate.fields.est_user_ip') }}
                                    </th>
                                    <td>
                                        {{ $estimate->est_user_ip }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.estimates.index') }}">
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
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.changeOrder.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.change-orders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.id') }}
                        </th>
                        <td>
                            {{ $changeOrder->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_title') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_stat') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_stat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_state') }}
                        </th>
                        <td>
                            {{ App\Models\ChangeOrder::EST_STATE_SELECT[$changeOrder->est_state] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_county') }}
                        </th>
                        <td>
                            {{ App\Models\ChangeOrder::EST_COUNTY_SELECT[$changeOrder->est_county] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_total_before_tax') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_total_before_tax }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_state_tax') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_state_tax }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_county_tax') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_county_tax }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_total_after_tax') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_total_after_tax }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_note') }}
                        </th>
                        <td>
                            {!! $changeOrder->est_note !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.dep_calc_1') }}
                        </th>
                        <td>
                            {{ $changeOrder->dep_calc_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.dep_calc_2') }}
                        </th>
                        <td>
                            {{ $changeOrder->dep_calc_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.dep_calc_3') }}
                        </th>
                        <td>
                            {{ $changeOrder->dep_calc_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_desposit_1') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_desposit_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_desposit_2') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_desposit_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_deposit_3') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_deposit_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_view_price') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $changeOrder->est_view_price ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_view_qty') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $changeOrder->est_view_qty ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_view_detail') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $changeOrder->est_view_detail ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_cust_email_signed') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_cust_email_signed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_cust_first_signed') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_cust_first_signed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_cust_last_signed') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_cust_last_signed }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_sign') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_sign }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_sign_int') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_sign_int }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_approve_date') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_approve_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.changeOrder.fields.est_user_ip') }}
                        </th>
                        <td>
                            {{ $changeOrder->est_user_ip }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.change-orders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
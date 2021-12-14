@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.customerContact.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customer-contacts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.id') }}
                        </th>
                        <td>
                            {{ $customerContact->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.ms_cust') }}
                        </th>
                        <td>
                            {{ $customerContact->ms_cust }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.id_cust_status') }}
                        </th>
                        <td>
                            {{ $customerContact->id_cust_status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_status') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_status->cs_status ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_fullname') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_fullname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_title') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_vet') }}
                        </th>
                        <td>
                            {{ App\Models\CustomerContact::CUST_VET_SELECT[$customerContact->cust_vet] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_email') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.ms_primary_email') }}
                        </th>
                        <td>
                            {{ $customerContact->ms_primary_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.ms_secondary_email') }}
                        </th>
                        <td>
                            {{ $customerContact->ms_secondary_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_email_2') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_email_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_phone') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_phone_2') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_phone_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.ms_phone') }}
                        </th>
                        <td>
                            {{ $customerContact->ms_phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_fax') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_fax }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.ms_address') }}
                        </th>
                        <td>
                            {{ $customerContact->ms_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_address') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_route') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_route }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_city') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_state') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_state }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_zip') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_zip }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_county') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_county }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_lat') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_lat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_lon') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_lon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_note') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_note }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_background') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_background }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.ms_qb_sync_date') }}
                        </th>
                        <td>
                            {{ $customerContact->ms_qb_sync_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.ms_qb') }}
                        </th>
                        <td>
                            {{ $customerContact->ms_qb }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.ms_qb_editsequence') }}
                        </th>
                        <td>
                            {{ $customerContact->ms_qb_editsequence }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.ms_qb_sync') }}
                        </th>
                        <td>
                            {{ $customerContact->ms_qb_sync }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.ms_qb_name') }}
                        </th>
                        <td>
                            {{ $customerContact->ms_qb_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.ms_qbweb') }}
                        </th>
                        <td>
                            {{ $customerContact->ms_qbweb }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.ms_created_by') }}
                        </th>
                        <td>
                            {{ $customerContact->ms_created_by }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerContact.fields.cust_created_by') }}
                        </th>
                        <td>
                            {{ $customerContact->cust_created_by }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customer-contacts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
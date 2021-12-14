@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.lead.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.leads.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $lead->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.first_name') }}
                                    </th>
                                    <td>
                                        {{ $lead->first_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.last_name') }}
                                    </th>
                                    <td>
                                        {{ $lead->last_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $lead->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.email_2') }}
                                    </th>
                                    <td>
                                        {{ $lead->email_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.phone') }}
                                    </th>
                                    <td>
                                        {{ $lead->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.phone_2') }}
                                    </th>
                                    <td>
                                        {{ $lead->phone_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.description') }}
                                    </th>
                                    <td>
                                        {{ $lead->description }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.homephone') }}
                                    </th>
                                    <td>
                                        {{ $lead->homephone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.goog_address') }}
                                    </th>
                                    <td>
                                        {{ $lead->goog_address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_lon') }}
                                    </th>
                                    <td>
                                        {{ $lead->lead_lon }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_lat') }}
                                    </th>
                                    <td>
                                        {{ $lead->lead_lat }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_street') }}
                                    </th>
                                    <td>
                                        {{ $lead->lead_street }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_lot') }}
                                    </th>
                                    <td>
                                        {{ $lead->lead_lot }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_city') }}
                                    </th>
                                    <td>
                                        {{ $lead->lead_city }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_state') }}
                                    </th>
                                    <td>
                                        {{ $lead->lead_state }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_zip') }}
                                    </th>
                                    <td>
                                        {{ $lead->lead_zip }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.lead_county') }}
                                    </th>
                                    <td>
                                        {{ $lead->lead_county }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.lead.fields.dateassigned') }}
                                    </th>
                                    <td>
                                        {{ $lead->dateassigned }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.leads.index') }}">
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
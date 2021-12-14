@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.jobEvent.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.job-events.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.jobEvent.fields.id') }}
                        </th>
                        <td>
                            {{ $jobEvent->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobEvent.fields.name') }}
                        </th>
                        <td>
                            {{ $jobEvent->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobEvent.fields.description') }}
                        </th>
                        <td>
                            {{ $jobEvent->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobEvent.fields.attachment') }}
                        </th>
                        <td>
                            @if($jobEvent->attachment)
                                <a href="{{ $jobEvent->attachment->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobEvent.fields.start_date') }}
                        </th>
                        <td>
                            {{ $jobEvent->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.jobEvent.fields.end_date') }}
                        </th>
                        <td>
                            {{ $jobEvent->end_date }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.job-events.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
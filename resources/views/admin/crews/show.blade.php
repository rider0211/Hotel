@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.crew.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.crews.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.crew.fields.id') }}
                        </th>
                        <td>
                            {{ $crew->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crew.fields.crew_name') }}
                        </th>
                        <td>
                            {{ $crew->crew_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crew.fields.crew_color') }}
                        </th>
                        <td>
                            {{ $crew->crew_color }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.crews.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
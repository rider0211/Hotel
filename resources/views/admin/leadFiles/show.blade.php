@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.leadFile.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.lead-files.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.leadFile.fields.id') }}
                        </th>
                        <td>
                            {{ $leadFile->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leadFile.fields.jfile_title') }}
                        </th>
                        <td>
                            {{ $leadFile->jfile_title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leadFile.fields.jfile_name') }}
                        </th>
                        <td>
                            @foreach($leadFile->jfile_name as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.leadFile.fields.jfile_photo') }}
                        </th>
                        <td>
                            @foreach($leadFile->jfile_photo as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.lead-files.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
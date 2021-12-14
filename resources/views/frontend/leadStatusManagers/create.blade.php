@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.leadStatusManager.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.lead-status-managers.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="is_active" value="0">
                                <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', 0) == 1 || old('is_active') === null ? 'checked' : '' }}>
                                <label for="is_active">{{ trans('cruds.leadStatusManager.fields.is_active') }}</label>
                            </div>
                            @if($errors->has('is_active'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('is_active') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.leadStatusManager.fields.is_active_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="lead_status_id">{{ trans('cruds.leadStatusManager.fields.lead_status') }}</label>
                            <select class="form-control select2" name="lead_status_id" id="lead_status_id" required>
                                @foreach($lead_statuses as $id => $entry)
                                    <option value="{{ $id }}" {{ old('lead_status_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('lead_status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lead_status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.leadStatusManager.fields.lead_status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="activity_results">{{ trans('cruds.leadStatusManager.fields.activity_result') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="activity_results[]" id="activity_results" multiple required>
                                @foreach($activity_results as $id => $activity_result)
                                    <option value="{{ $id }}" {{ in_array($id, old('activity_results', [])) ? 'selected' : '' }}>{{ $activity_result }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('activity_results'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('activity_results') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.leadStatusManager.fields.activity_result_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
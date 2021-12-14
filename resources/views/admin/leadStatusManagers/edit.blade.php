@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.leadStatusManager.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.lead-status-managers.update", [$leadStatusManager->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_active" value="0">
                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $leadStatusManager->is_active || old('is_active', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">{{ trans('cruds.leadStatusManager.fields.is_active') }}</label>
                </div>
                @if($errors->has('is_active'))
                    <span class="text-danger">{{ $errors->first('is_active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.leadStatusManager.fields.is_active_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="lead_status_id">{{ trans('cruds.leadStatusManager.fields.lead_status') }}</label>
                <select class="form-control select2 {{ $errors->has('lead_status') ? 'is-invalid' : '' }}" name="lead_status_id" id="lead_status_id" required>
                    @foreach($lead_statuses as $id => $entry)
                        <option value="{{ $id }}" {{ (old('lead_status_id') ? old('lead_status_id') : $leadStatusManager->lead_status->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('lead_status'))
                    <span class="text-danger">{{ $errors->first('lead_status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.leadStatusManager.fields.lead_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="activity_results">{{ trans('cruds.leadStatusManager.fields.activity_result') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('activity_results') ? 'is-invalid' : '' }}" name="activity_results[]" id="activity_results" multiple required>
                    @foreach($activity_results as $id => $activity_result)
                        <option value="{{ $id }}" {{ (in_array($id, old('activity_results', [])) || $leadStatusManager->activity_results->contains($id)) ? 'selected' : '' }}>{{ $activity_result }}</option>
                    @endforeach
                </select>
                @if($errors->has('activity_results'))
                    <span class="text-danger">{{ $errors->first('activity_results') }}</span>
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



@endsection
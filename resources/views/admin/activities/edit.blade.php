@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.activity.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.activities.update", [$activity->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="act_notes">{{ trans('cruds.activity.fields.act_notes') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('act_notes') ? 'is-invalid' : '' }}" name="act_notes" id="act_notes">{!! old('act_notes', $activity->act_notes) !!}</textarea>
                @if($errors->has('act_notes'))
                    <span class="text-danger">{{ $errors->first('act_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.act_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="act_start">{{ trans('cruds.activity.fields.act_start') }}</label>
                <input class="form-control datetime {{ $errors->has('act_start') ? 'is-invalid' : '' }}" type="text" name="act_start" id="act_start" value="{{ old('act_start', $activity->act_start) }}">
                @if($errors->has('act_start'))
                    <span class="text-danger">{{ $errors->first('act_start') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.act_start_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="act_due_by">{{ trans('cruds.activity.fields.act_due_by') }}</label>
                <input class="form-control datetime {{ $errors->has('act_due_by') ? 'is-invalid' : '' }}" type="text" name="act_due_by" id="act_due_by" value="{{ old('act_due_by', $activity->act_due_by) }}">
                @if($errors->has('act_due_by'))
                    <span class="text-danger">{{ $errors->first('act_due_by') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.act_due_by_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="act_end">{{ trans('cruds.activity.fields.act_end') }}</label>
                <input class="form-control datetime {{ $errors->has('act_end') ? 'is-invalid' : '' }}" type="text" name="act_end" id="act_end" value="{{ old('act_end', $activity->act_end) }}">
                @if($errors->has('act_end'))
                    <span class="text-danger">{{ $errors->first('act_end') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.act_end_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lead_id">{{ trans('cruds.activity.fields.lead') }}</label>
                <select class="form-control select2 {{ $errors->has('lead') ? 'is-invalid' : '' }}" name="lead_id" id="lead_id">
                    @foreach($leads as $id => $entry)
                        <option value="{{ $id }}" {{ (old('lead_id') ? old('lead_id') : $activity->lead->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('lead'))
                    <span class="text-danger">{{ $errors->first('lead') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.lead_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="job_id">{{ trans('cruds.activity.fields.job') }}</label>
                <select class="form-control select2 {{ $errors->has('job') ? 'is-invalid' : '' }}" name="job_id" id="job_id">
                    @foreach($jobs as $id => $entry)
                        <option value="{{ $id }}" {{ (old('job_id') ? old('job_id') : $activity->job->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('job'))
                    <span class="text-danger">{{ $errors->first('job') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.job_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact">{{ trans('cruds.activity.fields.contact') }}</label>
                <input class="form-control {{ $errors->has('contact') ? 'is-invalid' : '' }}" type="text" name="contact" id="contact" value="{{ old('contact', $activity->contact) }}">
                @if($errors->has('contact'))
                    <span class="text-danger">{{ $errors->first('contact') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.contact_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activity_name">{{ trans('cruds.activity.fields.activity_name') }}</label>
                <input class="form-control {{ $errors->has('activity_name') ? 'is-invalid' : '' }}" type="text" name="activity_name" id="activity_name" value="{{ old('activity_name', $activity->activity_name) }}">
                @if($errors->has('activity_name'))
                    <span class="text-danger">{{ $errors->first('activity_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activity_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activity_type">{{ trans('cruds.activity.fields.activity_type') }}</label>
                <input class="form-control {{ $errors->has('activity_type') ? 'is-invalid' : '' }}" type="text" name="activity_type" id="activity_type" value="{{ old('activity_type', $activity->activity_type) }}">
                @if($errors->has('activity_type'))
                    <span class="text-danger">{{ $errors->first('activity_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activity_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activity_reference">{{ trans('cruds.activity.fields.activity_reference') }}</label>
                <input class="form-control {{ $errors->has('activity_reference') ? 'is-invalid' : '' }}" type="text" name="activity_reference" id="activity_reference" value="{{ old('activity_reference', $activity->activity_reference) }}">
                @if($errors->has('activity_reference'))
                    <span class="text-danger">{{ $errors->first('activity_reference') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activity_reference_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activity_result">{{ trans('cruds.activity.fields.activity_result') }}</label>
                <input class="form-control {{ $errors->has('activity_result') ? 'is-invalid' : '' }}" type="text" name="activity_result" id="activity_result" value="{{ old('activity_result', $activity->activity_result) }}">
                @if($errors->has('activity_result'))
                    <span class="text-danger">{{ $errors->first('activity_result') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activity_result_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activity_completed_date">{{ trans('cruds.activity.fields.activity_completed_date') }}</label>
                <input class="form-control {{ $errors->has('activity_completed_date') ? 'is-invalid' : '' }}" type="text" name="activity_completed_date" id="activity_completed_date" value="{{ old('activity_completed_date', $activity->activity_completed_date) }}">
                @if($errors->has('activity_completed_date'))
                    <span class="text-danger">{{ $errors->first('activity_completed_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activity_completed_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activity_due_date">{{ trans('cruds.activity.fields.activity_due_date') }}</label>
                <input class="form-control {{ $errors->has('activity_due_date') ? 'is-invalid' : '' }}" type="text" name="activity_due_date" id="activity_due_date" value="{{ old('activity_due_date', $activity->activity_due_date) }}">
                @if($errors->has('activity_due_date'))
                    <span class="text-danger">{{ $errors->first('activity_due_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activity_due_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activity_reminder_minutes">{{ trans('cruds.activity.fields.activity_reminder_minutes') }}</label>
                <input class="form-control {{ $errors->has('activity_reminder_minutes') ? 'is-invalid' : '' }}" type="text" name="activity_reminder_minutes" id="activity_reminder_minutes" value="{{ old('activity_reminder_minutes', $activity->activity_reminder_minutes) }}">
                @if($errors->has('activity_reminder_minutes'))
                    <span class="text-danger">{{ $errors->first('activity_reminder_minutes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activity_reminder_minutes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activity_notes">{{ trans('cruds.activity.fields.activity_notes') }}</label>
                <input class="form-control {{ $errors->has('activity_notes') ? 'is-invalid' : '' }}" type="text" name="activity_notes" id="activity_notes" value="{{ old('activity_notes', $activity->activity_notes) }}">
                @if($errors->has('activity_notes'))
                    <span class="text-danger">{{ $errors->first('activity_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activity_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="appt">{{ trans('cruds.activity.fields.appt') }}</label>
                <input class="form-control {{ $errors->has('appt') ? 'is-invalid' : '' }}" type="text" name="appt" id="appt" value="{{ old('appt', $activity->appt) }}">
                @if($errors->has('appt'))
                    <span class="text-danger">{{ $errors->first('appt') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.appt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activity_assign_emp">{{ trans('cruds.activity.fields.activity_assign_emp') }}</label>
                <input class="form-control {{ $errors->has('activity_assign_emp') ? 'is-invalid' : '' }}" type="text" name="activity_assign_emp" id="activity_assign_emp" value="{{ old('activity_assign_emp', $activity->activity_assign_emp) }}">
                @if($errors->has('activity_assign_emp'))
                    <span class="text-danger">{{ $errors->first('activity_assign_emp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activity_assign_emp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activity_sched_emp">{{ trans('cruds.activity.fields.activity_sched_emp') }}</label>
                <input class="form-control {{ $errors->has('activity_sched_emp') ? 'is-invalid' : '' }}" type="text" name="activity_sched_emp" id="activity_sched_emp" value="{{ old('activity_sched_emp', $activity->activity_sched_emp) }}">
                @if($errors->has('activity_sched_emp'))
                    <span class="text-danger">{{ $errors->first('activity_sched_emp') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activity_sched_emp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activity_reminder_is_dismissed">{{ trans('cruds.activity.fields.activity_reminder_is_dismissed') }}</label>
                <input class="form-control {{ $errors->has('activity_reminder_is_dismissed') ? 'is-invalid' : '' }}" type="text" name="activity_reminder_is_dismissed" id="activity_reminder_is_dismissed" value="{{ old('activity_reminder_is_dismissed', $activity->activity_reminder_is_dismissed) }}">
                @if($errors->has('activity_reminder_is_dismissed'))
                    <span class="text-danger">{{ $errors->first('activity_reminder_is_dismissed') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activity_reminder_is_dismissed_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="is_active">{{ trans('cruds.activity.fields.is_active') }}</label>
                <input class="form-control {{ $errors->has('is_active') ? 'is-invalid' : '' }}" type="text" name="is_active" id="is_active" value="{{ old('is_active', $activity->is_active) }}">
                @if($errors->has('is_active'))
                    <span class="text-danger">{{ $errors->first('is_active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.is_active_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_updateby">{{ trans('cruds.activity.fields.last_updateby') }}</label>
                <input class="form-control {{ $errors->has('last_updateby') ? 'is-invalid' : '' }}" type="text" name="last_updateby" id="last_updateby" value="{{ old('last_updateby', $activity->last_updateby) }}">
                @if($errors->has('last_updateby'))
                    <span class="text-danger">{{ $errors->first('last_updateby') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.last_updateby_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_update">{{ trans('cruds.activity.fields.last_update') }}</label>
                <input class="form-control {{ $errors->has('last_update') ? 'is-invalid' : '' }}" type="text" name="last_update" id="last_update" value="{{ old('last_update', $activity->last_update) }}">
                @if($errors->has('last_update'))
                    <span class="text-danger">{{ $errors->first('last_update') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.last_update_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_led">{{ trans('cruds.activity.fields.id_led') }}</label>
                <input class="form-control {{ $errors->has('id_led') ? 'is-invalid' : '' }}" type="text" name="id_led" id="id_led" value="{{ old('id_led', $activity->id_led) }}">
                @if($errors->has('id_led'))
                    <span class="text-danger">{{ $errors->first('id_led') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.id_led_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activityresultid">{{ trans('cruds.activity.fields.activityresultid') }}</label>
                <input class="form-control {{ $errors->has('activityresultid') ? 'is-invalid' : '' }}" type="text" name="activityresultid" id="activityresultid" value="{{ old('activityresultid', $activity->activityresultid) }}">
                @if($errors->has('activityresultid'))
                    <span class="text-danger">{{ $errors->first('activityresultid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activityresultid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activityreferenceid">{{ trans('cruds.activity.fields.activityreferenceid') }}</label>
                <input class="form-control {{ $errors->has('activityreferenceid') ? 'is-invalid' : '' }}" type="text" name="activityreferenceid" id="activityreferenceid" value="{{ old('activityreferenceid', $activity->activityreferenceid) }}">
                @if($errors->has('activityreferenceid'))
                    <span class="text-danger">{{ $errors->first('activityreferenceid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activityreferenceid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="t_scheduler_event">{{ trans('cruds.activity.fields.t_scheduler_event') }}</label>
                <input class="form-control {{ $errors->has('t_scheduler_event') ? 'is-invalid' : '' }}" type="text" name="t_scheduler_event" id="t_scheduler_event" value="{{ old('t_scheduler_event', $activity->t_scheduler_event) }}">
                @if($errors->has('t_scheduler_event'))
                    <span class="text-danger">{{ $errors->first('t_scheduler_event') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.t_scheduler_event_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="activity_process_step">{{ trans('cruds.activity.fields.activity_process_step') }}</label>
                <input class="form-control {{ $errors->has('activity_process_step') ? 'is-invalid' : '' }}" type="text" name="activity_process_step" id="activity_process_step" value="{{ old('activity_process_step', $activity->activity_process_step) }}">
                @if($errors->has('activity_process_step'))
                    <span class="text-danger">{{ $errors->first('activity_process_step') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.activity_process_step_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="id_job">{{ trans('cruds.activity.fields.id_job') }}</label>
                <input class="form-control {{ $errors->has('id_job') ? 'is-invalid' : '' }}" type="text" name="id_job" id="id_job" value="{{ old('id_job', $activity->id_job) }}">
                @if($errors->has('id_job'))
                    <span class="text-danger">{{ $errors->first('id_job') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.id_job_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="process_type_steps">{{ trans('cruds.activity.fields.process_type_steps') }}</label>
                <input class="form-control {{ $errors->has('process_type_steps') ? 'is-invalid' : '' }}" type="text" name="process_type_steps" id="process_type_steps" value="{{ old('process_type_steps', $activity->process_type_steps) }}">
                @if($errors->has('process_type_steps'))
                    <span class="text-danger">{{ $errors->first('process_type_steps') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.process_type_steps_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="service_order">{{ trans('cruds.activity.fields.service_order') }}</label>
                <input class="form-control {{ $errors->has('service_order') ? 'is-invalid' : '' }}" type="text" name="service_order" id="service_order" value="{{ old('service_order', $activity->service_order) }}">
                @if($errors->has('service_order'))
                    <span class="text-danger">{{ $errors->first('service_order') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.service_order_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_marketing_queue">{{ trans('cruds.activity.fields.contact_marketing_queue') }}</label>
                <input class="form-control {{ $errors->has('contact_marketing_queue') ? 'is-invalid' : '' }}" type="text" name="contact_marketing_queue" id="contact_marketing_queue" value="{{ old('contact_marketing_queue', $activity->contact_marketing_queue) }}">
                @if($errors->has('contact_marketing_queue'))
                    <span class="text-danger">{{ $errors->first('contact_marketing_queue') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.contact_marketing_queue_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="column_27">{{ trans('cruds.activity.fields.column_27') }}</label>
                <input class="form-control {{ $errors->has('column_27') ? 'is-invalid' : '' }}" type="text" name="column_27" id="column_27" value="{{ old('column_27', $activity->column_27) }}">
                @if($errors->has('column_27'))
                    <span class="text-danger">{{ $errors->first('column_27') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activity.fields.column_27_helper') }}</span>
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

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.activities.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $activity->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection
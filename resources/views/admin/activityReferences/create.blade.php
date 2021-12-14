@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.activityReference.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.activity-references.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="act_notes">{{ trans('cruds.activityReference.fields.act_notes') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('act_notes') ? 'is-invalid' : '' }}" name="act_notes" id="act_notes">{!! old('act_notes') !!}</textarea>
                @if($errors->has('act_notes'))
                    <span class="text-danger">{{ $errors->first('act_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activityReference.fields.act_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="act_due_by">{{ trans('cruds.activityReference.fields.act_due_by') }}</label>
                <input class="form-control datetime {{ $errors->has('act_due_by') ? 'is-invalid' : '' }}" type="text" name="act_due_by" id="act_due_by" value="{{ old('act_due_by') }}">
                @if($errors->has('act_due_by'))
                    <span class="text-danger">{{ $errors->first('act_due_by') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activityReference.fields.act_due_by_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="refer_name">{{ trans('cruds.activityReference.fields.refer_name') }}</label>
                <input class="form-control {{ $errors->has('refer_name') ? 'is-invalid' : '' }}" type="text" name="refer_name" id="refer_name" value="{{ old('refer_name', '') }}" required>
                @if($errors->has('refer_name'))
                    <span class="text-danger">{{ $errors->first('refer_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.activityReference.fields.refer_name_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.activity-references.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $activityReference->id ?? 0 }}');
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
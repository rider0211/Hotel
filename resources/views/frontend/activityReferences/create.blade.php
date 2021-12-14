@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.activityReference.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.activity-references.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="act_notes">{{ trans('cruds.activityReference.fields.act_notes') }}</label>
                            <textarea class="form-control ckeditor" name="act_notes" id="act_notes">{!! old('act_notes') !!}</textarea>
                            @if($errors->has('act_notes'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('act_notes') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.activityReference.fields.act_notes_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="act_due_by">{{ trans('cruds.activityReference.fields.act_due_by') }}</label>
                            <input class="form-control datetime" type="text" name="act_due_by" id="act_due_by" value="{{ old('act_due_by') }}">
                            @if($errors->has('act_due_by'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('act_due_by') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.activityReference.fields.act_due_by_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="refer_name">{{ trans('cruds.activityReference.fields.refer_name') }}</label>
                            <input class="form-control" type="text" name="refer_name" id="refer_name" value="{{ old('refer_name', '') }}" required>
                            @if($errors->has('refer_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('refer_name') }}
                                </div>
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

        </div>
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
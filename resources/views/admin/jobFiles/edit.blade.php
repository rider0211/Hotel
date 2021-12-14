@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.jobFile.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.job-files.update", [$jobFile->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="jfile_name">{{ trans('cruds.jobFile.fields.jfile_name') }}</label>
                <div class="needsclick dropzone {{ $errors->has('jfile_name') ? 'is-invalid' : '' }}" id="jfile_name-dropzone">
                </div>
                @if($errors->has('jfile_name'))
                    <span class="text-danger">{{ $errors->first('jfile_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.jobFile.fields.jfile_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="jfile_photo">{{ trans('cruds.jobFile.fields.jfile_photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('jfile_photo') ? 'is-invalid' : '' }}" id="jfile_photo-dropzone">
                </div>
                @if($errors->has('jfile_photo'))
                    <span class="text-danger">{{ $errors->first('jfile_photo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.jobFile.fields.jfile_photo_helper') }}</span>
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
    var uploadedJfileNameMap = {}
Dropzone.options.jfileNameDropzone = {
    url: '{{ route('admin.job-files.storeMedia') }}',
    maxFilesize: 25, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 25
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="jfile_name[]" value="' + response.name + '">')
      uploadedJfileNameMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedJfileNameMap[file.name]
      }
      $('form').find('input[name="jfile_name[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($jobFile) && $jobFile->jfile_name)
          var files =
            {!! json_encode($jobFile->jfile_name) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="jfile_name[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    var uploadedJfilePhotoMap = {}
Dropzone.options.jfilePhotoDropzone = {
    url: '{{ route('admin.job-files.storeMedia') }}',
    maxFilesize: 5, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="jfile_photo[]" value="' + response.name + '">')
      uploadedJfilePhotoMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedJfilePhotoMap[file.name]
      }
      $('form').find('input[name="jfile_photo[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($jobFile) && $jobFile->jfile_photo)
      var files = {!! json_encode($jobFile->jfile_photo) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="jfile_photo[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection
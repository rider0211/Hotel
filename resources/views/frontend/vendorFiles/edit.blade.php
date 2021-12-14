@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.vendorFile.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.vendor-files.update", [$vendorFile->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="vfile_name">{{ trans('cruds.vendorFile.fields.vfile_name') }}</label>
                            <input class="form-control" type="text" name="vfile_name" id="vfile_name" value="{{ old('vfile_name', $vendorFile->vfile_name) }}" required>
                            @if($errors->has('vfile_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('vfile_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vendorFile.fields.vfile_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="ven_file">{{ trans('cruds.vendorFile.fields.ven_file') }}</label>
                            <div class="needsclick dropzone" id="ven_file-dropzone">
                            </div>
                            @if($errors->has('ven_file'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ven_file') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.vendorFile.fields.ven_file_helper') }}</span>
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
    Dropzone.options.venFileDropzone = {
    url: '{{ route('frontend.vendor-files.storeMedia') }}',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="ven_file"]').remove()
      $('form').append('<input type="hidden" name="ven_file" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="ven_file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($vendorFile) && $vendorFile->ven_file)
      var file = {!! json_encode($vendorFile->ven_file) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="ven_file" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
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
@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.users.update", [$user->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="first_name">{{ trans('cruds.user.fields.first_name') }}</label>
                            <input class="form-control" type="text" name="first_name" id="first_name" value="{{ old('first_name', $user->first_name) }}" required>
                            @if($errors->has('first_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('first_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.first_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="last_name">{{ trans('cruds.user.fields.last_name') }}</label>
                            <input class="form-control" type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}" required>
                            @if($errors->has('last_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('last_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.last_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="user_company">{{ trans('cruds.user.fields.user_company') }}</label>
                            <input class="form-control" type="number" name="user_company" id="user_company" value="{{ old('user_company', $user->user_company) }}" step="1">
                            @if($errors->has('user_company'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user_company') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.user_company_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="user_status">{{ trans('cruds.user.fields.user_status') }}</label>
                            <input class="form-control" type="number" name="user_status" id="user_status" value="{{ old('user_status', $user->user_status) }}" step="1">
                            @if($errors->has('user_status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user_status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.user_status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="user_role">{{ trans('cruds.user.fields.user_role') }}</label>
                            <input class="form-control" type="number" name="user_role" id="user_role" value="{{ old('user_role', $user->user_role) }}" step="1">
                            @if($errors->has('user_role'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user_role') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.user_role_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="user_dept">{{ trans('cruds.user.fields.user_dept') }}</label>
                            <input class="form-control" type="number" name="user_dept" id="user_dept" value="{{ old('user_dept', $user->user_dept) }}" step="1">
                            @if($errors->has('user_dept'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user_dept') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.user_dept_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="user_title">{{ trans('cruds.user.fields.user_title') }}</label>
                            <input class="form-control" type="number" name="user_title" id="user_title" value="{{ old('user_title', $user->user_title) }}" step="1">
                            @if($errors->has('user_title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user_title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.user_title_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="address">{{ trans('cruds.user.fields.address') }}</label>
                            <input class="form-control" type="text" name="address" id="address" value="{{ old('address', $user->address) }}">
                            @if($errors->has('address'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('address') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.address_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="user_profile_img">{{ trans('cruds.user.fields.user_profile_img') }}</label>
                            <div class="needsclick dropzone" id="user_profile_img-dropzone">
                            </div>
                            @if($errors->has('user_profile_img'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user_profile_img') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.user_profile_img_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="user_color">{{ trans('cruds.user.fields.user_color') }}</label>
                            <input class="form-control" type="text" name="user_color" id="user_color" value="{{ old('user_color', $user->user_color) }}">
                            @if($errors->has('user_color'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user_color') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.user_color_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="goog_pw">{{ trans('cruds.user.fields.goog_pw') }}</label>
                            <input class="form-control" type="text" name="goog_pw" id="goog_pw" value="{{ old('goog_pw', $user->goog_pw) }}">
                            @if($errors->has('goog_pw'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('goog_pw') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.goog_pw_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="password">{{ trans('cruds.user.fields.password') }}</label>
                            <input class="form-control" type="password" name="password" id="password">
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="mobile">{{ trans('cruds.user.fields.mobile') }}</label>
                            <input class="form-control" type="text" name="mobile" id="mobile" value="{{ old('mobile', $user->mobile) }}">
                            @if($errors->has('mobile'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('mobile') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.mobile_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="roles[]" id="roles" multiple required>
                                @foreach($roles as $id => $role)
                                    <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || $user->roles->contains($id)) ? 'selected' : '' }}>{{ $role }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('roles'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('roles') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.roles_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="ticketit_admin">{{ trans('cruds.user.fields.ticketit_admin') }}</label>
                            <input class="form-control" type="number" name="ticketit_admin" id="ticketit_admin" value="{{ old('ticketit_admin', $user->ticketit_admin) }}" step="1">
                            @if($errors->has('ticketit_admin'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ticketit_admin') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.ticketit_admin_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="ticketit_agent">{{ trans('cruds.user.fields.ticketit_agent') }}</label>
                            <input class="form-control" type="text" name="ticketit_agent" id="ticketit_agent" value="{{ old('ticketit_agent', $user->ticketit_agent) }}">
                            @if($errors->has('ticketit_agent'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ticketit_agent') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.ticketit_agent_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="last_updated_by_id">{{ trans('cruds.user.fields.last_updated_by') }}</label>
                            <select class="form-control select2" name="last_updated_by_id" id="last_updated_by_id">
                                @foreach($last_updated_bies as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('last_updated_by_id') ? old('last_updated_by_id') : $user->last_updated_by->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('last_updated_by'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('last_updated_by') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.last_updated_by_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="ms_is_active" value="0">
                                <input type="checkbox" name="ms_is_active" id="ms_is_active" value="1" {{ $user->ms_is_active || old('ms_is_active', 0) === 1 ? 'checked' : '' }}>
                                <label for="ms_is_active">{{ trans('cruds.user.fields.ms_is_active') }}</label>
                            </div>
                            @if($errors->has('ms_is_active'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ms_is_active') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.ms_is_active_helper') }}</span>
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
    Dropzone.options.userProfileImgDropzone = {
    url: '{{ route('frontend.users.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="user_profile_img"]').remove()
      $('form').append('<input type="hidden" name="user_profile_img" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="user_profile_img"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($user) && $user->user_profile_img)
      var file = {!! json_encode($user->user_profile_img) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="user_profile_img" value="' + file.file_name + '">')
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
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.users.update", [$user->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="first_name">{{ trans('cruds.user.fields.first_name') }}</label>
                <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" type="text" name="first_name" id="first_name" value="{{ old('first_name', $user->first_name) }}" required>
                @if($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.first_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="last_name">{{ trans('cruds.user.fields.last_name') }}</label>
                <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}" required>
                @if($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.last_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_company">{{ trans('cruds.user.fields.user_company') }}</label>
                <input class="form-control {{ $errors->has('user_company') ? 'is-invalid' : '' }}" type="number" name="user_company" id="user_company" value="{{ old('user_company', $user->user_company) }}" step="1">
                @if($errors->has('user_company'))
                    <span class="text-danger">{{ $errors->first('user_company') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.user_company_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_status">{{ trans('cruds.user.fields.user_status') }}</label>
                <input class="form-control {{ $errors->has('user_status') ? 'is-invalid' : '' }}" type="number" name="user_status" id="user_status" value="{{ old('user_status', $user->user_status) }}" step="1">
                @if($errors->has('user_status'))
                    <span class="text-danger">{{ $errors->first('user_status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.user_status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_role">{{ trans('cruds.user.fields.user_role') }}</label>
                <input class="form-control {{ $errors->has('user_role') ? 'is-invalid' : '' }}" type="number" name="user_role" id="user_role" value="{{ old('user_role', $user->user_role) }}" step="1">
                @if($errors->has('user_role'))
                    <span class="text-danger">{{ $errors->first('user_role') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.user_role_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_dept">{{ trans('cruds.user.fields.user_dept') }}</label>
                <input class="form-control {{ $errors->has('user_dept') ? 'is-invalid' : '' }}" type="number" name="user_dept" id="user_dept" value="{{ old('user_dept', $user->user_dept) }}" step="1">
                @if($errors->has('user_dept'))
                    <span class="text-danger">{{ $errors->first('user_dept') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.user_dept_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_title">{{ trans('cruds.user.fields.user_title') }}</label>
                <input class="form-control {{ $errors->has('user_title') ? 'is-invalid' : '' }}" type="number" name="user_title" id="user_title" value="{{ old('user_title', $user->user_title) }}" step="1">
                @if($errors->has('user_title'))
                    <span class="text-danger">{{ $errors->first('user_title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.user_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.user.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $user->address) }}">
                @if($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_profile_img">{{ trans('cruds.user.fields.user_profile_img') }}</label>
                <div class="needsclick dropzone {{ $errors->has('user_profile_img') ? 'is-invalid' : '' }}" id="user_profile_img-dropzone">
                </div>
                @if($errors->has('user_profile_img'))
                    <span class="text-danger">{{ $errors->first('user_profile_img') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.user_profile_img_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_color">{{ trans('cruds.user.fields.user_color') }}</label>
                <input class="form-control {{ $errors->has('user_color') ? 'is-invalid' : '' }}" type="text" name="user_color" id="user_color" value="{{ old('user_color', $user->user_color) }}">
                @if($errors->has('user_color'))
                    <span class="text-danger">{{ $errors->first('user_color') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.user_color_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="goog_pw">{{ trans('cruds.user.fields.goog_pw') }}</label>
                <input class="form-control {{ $errors->has('goog_pw') ? 'is-invalid' : '' }}" type="text" name="goog_pw" id="goog_pw" value="{{ old('goog_pw', $user->goog_pw) }}">
                @if($errors->has('goog_pw'))
                    <span class="text-danger">{{ $errors->first('goog_pw') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.goog_pw_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="password">{{ trans('cruds.user.fields.password') }}</label>
                <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password">
                @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mobile">{{ trans('cruds.user.fields.mobile') }}</label>
                <input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" type="text" name="mobile" id="mobile" value="{{ old('mobile', $user->mobile) }}">
                @if($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.mobile_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" id="roles" multiple required>
                    @foreach($roles as $id => $role)
                        <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || $user->roles->contains($id)) ? 'selected' : '' }}>{{ $role }}</option>
                    @endforeach
                </select>
                @if($errors->has('roles'))
                    <span class="text-danger">{{ $errors->first('roles') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.roles_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ticketit_admin">{{ trans('cruds.user.fields.ticketit_admin') }}</label>
                <input class="form-control {{ $errors->has('ticketit_admin') ? 'is-invalid' : '' }}" type="number" name="ticketit_admin" id="ticketit_admin" value="{{ old('ticketit_admin', $user->ticketit_admin) }}" step="1">
                @if($errors->has('ticketit_admin'))
                    <span class="text-danger">{{ $errors->first('ticketit_admin') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.ticketit_admin_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ticketit_agent">{{ trans('cruds.user.fields.ticketit_agent') }}</label>
                <input class="form-control {{ $errors->has('ticketit_agent') ? 'is-invalid' : '' }}" type="text" name="ticketit_agent" id="ticketit_agent" value="{{ old('ticketit_agent', $user->ticketit_agent) }}">
                @if($errors->has('ticketit_agent'))
                    <span class="text-danger">{{ $errors->first('ticketit_agent') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.ticketit_agent_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="last_updated_by_id">{{ trans('cruds.user.fields.last_updated_by') }}</label>
                <select class="form-control select2 {{ $errors->has('last_updated_by') ? 'is-invalid' : '' }}" name="last_updated_by_id" id="last_updated_by_id">
                    @foreach($last_updated_bies as $id => $entry)
                        <option value="{{ $id }}" {{ (old('last_updated_by_id') ? old('last_updated_by_id') : $user->last_updated_by->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('last_updated_by'))
                    <span class="text-danger">{{ $errors->first('last_updated_by') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.user.fields.last_updated_by_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('ms_is_active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="ms_is_active" value="0">
                    <input class="form-check-input" type="checkbox" name="ms_is_active" id="ms_is_active" value="1" {{ $user->ms_is_active || old('ms_is_active', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="ms_is_active">{{ trans('cruds.user.fields.ms_is_active') }}</label>
                </div>
                @if($errors->has('ms_is_active'))
                    <span class="text-danger">{{ $errors->first('ms_is_active') }}</span>
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



@endsection

@section('scripts')
<script>
    Dropzone.options.userProfileImgDropzone = {
    url: '{{ route('admin.users.storeMedia') }}',
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
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.changeOrder.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.change-orders.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="est_title">{{ trans('cruds.changeOrder.fields.est_title') }}</label>
                <input class="form-control {{ $errors->has('est_title') ? 'is-invalid' : '' }}" type="text" name="est_title" id="est_title" value="{{ old('est_title', '') }}">
                @if($errors->has('est_title'))
                    <span class="text-danger">{{ $errors->first('est_title') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_stat">{{ trans('cruds.changeOrder.fields.est_stat') }}</label>
                <input class="form-control {{ $errors->has('est_stat') ? 'is-invalid' : '' }}" type="text" name="est_stat" id="est_stat" value="{{ old('est_stat', '') }}">
                @if($errors->has('est_stat'))
                    <span class="text-danger">{{ $errors->first('est_stat') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_stat_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.changeOrder.fields.est_state') }}</label>
                <select class="form-control {{ $errors->has('est_state') ? 'is-invalid' : '' }}" name="est_state" id="est_state" required>
                    <option value disabled {{ old('est_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\ChangeOrder::EST_STATE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('est_state', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('est_state'))
                    <span class="text-danger">{{ $errors->first('est_state') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.changeOrder.fields.est_county') }}</label>
                <select class="form-control {{ $errors->has('est_county') ? 'is-invalid' : '' }}" name="est_county" id="est_county" required>
                    <option value disabled {{ old('est_county', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\ChangeOrder::EST_COUNTY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('est_county', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('est_county'))
                    <span class="text-danger">{{ $errors->first('est_county') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_county_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_total_before_tax">{{ trans('cruds.changeOrder.fields.est_total_before_tax') }}</label>
                <input class="form-control {{ $errors->has('est_total_before_tax') ? 'is-invalid' : '' }}" type="number" name="est_total_before_tax" id="est_total_before_tax" value="{{ old('est_total_before_tax', '') }}" step="0.01">
                @if($errors->has('est_total_before_tax'))
                    <span class="text-danger">{{ $errors->first('est_total_before_tax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_total_before_tax_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_state_tax">{{ trans('cruds.changeOrder.fields.est_state_tax') }}</label>
                <input class="form-control {{ $errors->has('est_state_tax') ? 'is-invalid' : '' }}" type="text" name="est_state_tax" id="est_state_tax" value="{{ old('est_state_tax', '') }}">
                @if($errors->has('est_state_tax'))
                    <span class="text-danger">{{ $errors->first('est_state_tax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_state_tax_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_county_tax">{{ trans('cruds.changeOrder.fields.est_county_tax') }}</label>
                <input class="form-control {{ $errors->has('est_county_tax') ? 'is-invalid' : '' }}" type="text" name="est_county_tax" id="est_county_tax" value="{{ old('est_county_tax', '') }}">
                @if($errors->has('est_county_tax'))
                    <span class="text-danger">{{ $errors->first('est_county_tax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_county_tax_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_total_after_tax">{{ trans('cruds.changeOrder.fields.est_total_after_tax') }}</label>
                <input class="form-control {{ $errors->has('est_total_after_tax') ? 'is-invalid' : '' }}" type="text" name="est_total_after_tax" id="est_total_after_tax" value="{{ old('est_total_after_tax', '') }}">
                @if($errors->has('est_total_after_tax'))
                    <span class="text-danger">{{ $errors->first('est_total_after_tax') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_total_after_tax_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_note">{{ trans('cruds.changeOrder.fields.est_note') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('est_note') ? 'is-invalid' : '' }}" name="est_note" id="est_note">{!! old('est_note') !!}</textarea>
                @if($errors->has('est_note'))
                    <span class="text-danger">{{ $errors->first('est_note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_note_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dep_calc_1">{{ trans('cruds.changeOrder.fields.dep_calc_1') }}</label>
                <input class="form-control {{ $errors->has('dep_calc_1') ? 'is-invalid' : '' }}" type="text" name="dep_calc_1" id="dep_calc_1" value="{{ old('dep_calc_1', '70') }}" required>
                @if($errors->has('dep_calc_1'))
                    <span class="text-danger">{{ $errors->first('dep_calc_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.dep_calc_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dep_calc_2">{{ trans('cruds.changeOrder.fields.dep_calc_2') }}</label>
                <input class="form-control {{ $errors->has('dep_calc_2') ? 'is-invalid' : '' }}" type="text" name="dep_calc_2" id="dep_calc_2" value="{{ old('dep_calc_2', '20') }}" required>
                @if($errors->has('dep_calc_2'))
                    <span class="text-danger">{{ $errors->first('dep_calc_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.dep_calc_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dep_calc_3">{{ trans('cruds.changeOrder.fields.dep_calc_3') }}</label>
                <input class="form-control {{ $errors->has('dep_calc_3') ? 'is-invalid' : '' }}" type="text" name="dep_calc_3" id="dep_calc_3" value="{{ old('dep_calc_3', '10') }}" required>
                @if($errors->has('dep_calc_3'))
                    <span class="text-danger">{{ $errors->first('dep_calc_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.dep_calc_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_desposit_1">{{ trans('cruds.changeOrder.fields.est_desposit_1') }}</label>
                <input class="form-control {{ $errors->has('est_desposit_1') ? 'is-invalid' : '' }}" type="number" name="est_desposit_1" id="est_desposit_1" value="{{ old('est_desposit_1', '0') }}" step="0.01">
                @if($errors->has('est_desposit_1'))
                    <span class="text-danger">{{ $errors->first('est_desposit_1') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_desposit_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_desposit_2">{{ trans('cruds.changeOrder.fields.est_desposit_2') }}</label>
                <input class="form-control {{ $errors->has('est_desposit_2') ? 'is-invalid' : '' }}" type="number" name="est_desposit_2" id="est_desposit_2" value="{{ old('est_desposit_2', '0') }}" step="0.01">
                @if($errors->has('est_desposit_2'))
                    <span class="text-danger">{{ $errors->first('est_desposit_2') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_desposit_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_deposit_3">{{ trans('cruds.changeOrder.fields.est_deposit_3') }}</label>
                <input class="form-control {{ $errors->has('est_deposit_3') ? 'is-invalid' : '' }}" type="number" name="est_deposit_3" id="est_deposit_3" value="{{ old('est_deposit_3', '0') }}" step="0.01">
                @if($errors->has('est_deposit_3'))
                    <span class="text-danger">{{ $errors->first('est_deposit_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_deposit_3_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('est_view_price') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="est_view_price" value="0">
                    <input class="form-check-input" type="checkbox" name="est_view_price" id="est_view_price" value="1" {{ old('est_view_price', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="est_view_price">{{ trans('cruds.changeOrder.fields.est_view_price') }}</label>
                </div>
                @if($errors->has('est_view_price'))
                    <span class="text-danger">{{ $errors->first('est_view_price') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_view_price_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('est_view_qty') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="est_view_qty" value="0">
                    <input class="form-check-input" type="checkbox" name="est_view_qty" id="est_view_qty" value="1" {{ old('est_view_qty', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="est_view_qty">{{ trans('cruds.changeOrder.fields.est_view_qty') }}</label>
                </div>
                @if($errors->has('est_view_qty'))
                    <span class="text-danger">{{ $errors->first('est_view_qty') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_view_qty_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('est_view_detail') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="est_view_detail" value="0">
                    <input class="form-check-input" type="checkbox" name="est_view_detail" id="est_view_detail" value="1" {{ old('est_view_detail', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="est_view_detail">{{ trans('cruds.changeOrder.fields.est_view_detail') }}</label>
                </div>
                @if($errors->has('est_view_detail'))
                    <span class="text-danger">{{ $errors->first('est_view_detail') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_view_detail_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_access">{{ trans('cruds.changeOrder.fields.est_access') }}</label>
                <input class="form-control {{ $errors->has('est_access') ? 'is-invalid' : '' }}" type="text" name="est_access" id="est_access" value="{{ old('est_access', '') }}">
                @if($errors->has('est_access'))
                    <span class="text-danger">{{ $errors->first('est_access') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_access_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_cust_email_signed">{{ trans('cruds.changeOrder.fields.est_cust_email_signed') }}</label>
                <input class="form-control {{ $errors->has('est_cust_email_signed') ? 'is-invalid' : '' }}" type="text" name="est_cust_email_signed" id="est_cust_email_signed" value="{{ old('est_cust_email_signed', '') }}">
                @if($errors->has('est_cust_email_signed'))
                    <span class="text-danger">{{ $errors->first('est_cust_email_signed') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_cust_email_signed_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_cust_first_signed">{{ trans('cruds.changeOrder.fields.est_cust_first_signed') }}</label>
                <input class="form-control {{ $errors->has('est_cust_first_signed') ? 'is-invalid' : '' }}" type="text" name="est_cust_first_signed" id="est_cust_first_signed" value="{{ old('est_cust_first_signed', '') }}">
                @if($errors->has('est_cust_first_signed'))
                    <span class="text-danger">{{ $errors->first('est_cust_first_signed') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_cust_first_signed_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_cust_last_signed">{{ trans('cruds.changeOrder.fields.est_cust_last_signed') }}</label>
                <input class="form-control {{ $errors->has('est_cust_last_signed') ? 'is-invalid' : '' }}" type="text" name="est_cust_last_signed" id="est_cust_last_signed" value="{{ old('est_cust_last_signed', '') }}">
                @if($errors->has('est_cust_last_signed'))
                    <span class="text-danger">{{ $errors->first('est_cust_last_signed') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_cust_last_signed_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_sign">{{ trans('cruds.changeOrder.fields.est_sign') }}</label>
                <input class="form-control {{ $errors->has('est_sign') ? 'is-invalid' : '' }}" type="text" name="est_sign" id="est_sign" value="{{ old('est_sign', '') }}">
                @if($errors->has('est_sign'))
                    <span class="text-danger">{{ $errors->first('est_sign') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_sign_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_sign_int">{{ trans('cruds.changeOrder.fields.est_sign_int') }}</label>
                <input class="form-control {{ $errors->has('est_sign_int') ? 'is-invalid' : '' }}" type="text" name="est_sign_int" id="est_sign_int" value="{{ old('est_sign_int', '') }}">
                @if($errors->has('est_sign_int'))
                    <span class="text-danger">{{ $errors->first('est_sign_int') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_sign_int_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_approve_date">{{ trans('cruds.changeOrder.fields.est_approve_date') }}</label>
                <input class="form-control {{ $errors->has('est_approve_date') ? 'is-invalid' : '' }}" type="text" name="est_approve_date" id="est_approve_date" value="{{ old('est_approve_date', '') }}">
                @if($errors->has('est_approve_date'))
                    <span class="text-danger">{{ $errors->first('est_approve_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_approve_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="est_user_ip">{{ trans('cruds.changeOrder.fields.est_user_ip') }}</label>
                <input class="form-control {{ $errors->has('est_user_ip') ? 'is-invalid' : '' }}" type="text" name="est_user_ip" id="est_user_ip" value="{{ old('est_user_ip', '') }}">
                @if($errors->has('est_user_ip'))
                    <span class="text-danger">{{ $errors->first('est_user_ip') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.changeOrder.fields.est_user_ip_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.change-orders.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $changeOrder->id ?? 0 }}');
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
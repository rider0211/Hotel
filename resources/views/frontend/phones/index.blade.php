@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('phone_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.phones.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.phone.title_singular') }}
                        </a>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                            {{ trans('global.app_csvImport') }}
                        </button>
                        @include('csvImport.modal', ['model' => 'Phone', 'route' => 'admin.phones.parseCsvImport'])
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.phone.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Phone">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.phone.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_type_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.primary_phone_type') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.primary_phone') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.phone_contact') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.primary_ext') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.primary_dnc') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.primary_dnt') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.phone') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_access_company') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_type') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_cty_code') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_area_code') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_number') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_primary_phone_type') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_dnc') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_fed_do_not_call') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_state_do_not_call') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_written_permission_dnc') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_dnc_exempt_date') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_dnc_exempt') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_house_do_not_call') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_description') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_ext') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_do_not_fax') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_is_active') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.last_updateby_user') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_last_update') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phonenumbersearch') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phonenumberexcludingareacodesearch') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_dnt') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.phone.fields.ms_phone_dnt_texting_opt_out') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <select class="search" strict="true">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach(App\Models\Phone::PRIMARY_PHONE_TYPE_SELECT as $key => $item)
                                                <option value="{{ $item }}">{{ $item }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($phones as $key => $phone)
                                    <tr data-entry-id="{{ $phone->id }}">
                                        <td>
                                            {{ $phone->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_type_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\Phone::PRIMARY_PHONE_TYPE_SELECT[$phone->primary_phone_type] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->primary_phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->phone_contact ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->primary_ext ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $phone->primary_dnc ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $phone->primary_dnc ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $phone->primary_dnt ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $phone->primary_dnt ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            {{ $phone->phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_access_company ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_type ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_cty_code ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_area_code ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_number ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_primary_phone_type ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_dnc ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_fed_do_not_call ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_state_do_not_call ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_written_permission_dnc ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_dnc_exempt_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_dnc_exempt ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_house_do_not_call ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_description ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_ext ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_do_not_fax ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_is_active ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->last_updateby_user ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_last_update ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phonenumbersearch ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phonenumberexcludingareacodesearch ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_dnt ?? '' }}
                                        </td>
                                        <td>
                                            {{ $phone->ms_phone_dnt_texting_opt_out ?? '' }}
                                        </td>
                                        <td>
                                            @can('phone_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.phones.show', $phone->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('phone_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.phones.edit', $phone->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('phone_delete')
                                                <form action="{{ route('frontend.phones.destroy', $phone->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('phone_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.phones.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  });
  let table = $('.datatable-Phone:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection
@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('job_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.jobs.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.job.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.job.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Job">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.job.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_title') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.contact') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.lead') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_site') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_number') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_desc') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_type') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_status') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_address_1') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_address_2') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_city') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_state') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_zip') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_structure_value_code') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_note') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_start_date') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.sale_date') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_completed_date') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.qb_sync') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.qb_sync_date') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.qb') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.is_active') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.last_updateby') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.last_update') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.lead_appt_sold') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.exported_to_guild_quality') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.job_site_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.job.fields.qbweb') }}
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
                                @foreach($jobs as $key => $job)
                                    <tr data-entry-id="{{ $job->id }}">
                                        <td>
                                            {{ $job->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_title ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->contact ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->lead ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_site ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_number ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_desc ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_type ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_status ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_address_1 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_address_2 ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_city ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_state ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_zip ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_structure_value_code ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_note ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_start_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->sale_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_completed_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->qb_sync ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->qb_sync_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->qb ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->is_active ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->last_updateby ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->last_update ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->lead_appt_sold ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->exported_to_guild_quality ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->job_site_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $job->qbweb ?? '' }}
                                        </td>
                                        <td>
                                            @can('job_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.jobs.show', $job->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('job_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.jobs.edit', $job->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('job_delete')
                                                <form action="{{ route('frontend.jobs.destroy', $job->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('job_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.jobs.massDestroy') }}",
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
  let table = $('.datatable-Job:not(.ajaxTable)').DataTable({ buttons: dtButtons })
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
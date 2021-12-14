<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyActivityRequest;
use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;
use App\Models\Job;
use App\Models\Lead;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ActivityController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('activity_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Activity::with(['lead', 'job'])->select(sprintf('%s.*', (new Activity())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'activity_show';
                $editGate = 'activity_edit';
                $deleteGate = 'activity_delete';
                $crudRoutePart = 'activities';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });

            $table->addColumn('lead_first_name', function ($row) {
                return $row->lead ? $row->lead->first_name : '';
            });

            $table->editColumn('lead.last_name', function ($row) {
                return $row->lead ? (is_string($row->lead) ? $row->lead : $row->lead->last_name) : '';
            });
            $table->addColumn('job_job_title', function ($row) {
                return $row->job ? $row->job->job_title : '';
            });

            $table->editColumn('contact', function ($row) {
                return $row->contact ? $row->contact : '';
            });
            $table->editColumn('activity_name', function ($row) {
                return $row->activity_name ? $row->activity_name : '';
            });
            $table->editColumn('activity_type', function ($row) {
                return $row->activity_type ? $row->activity_type : '';
            });
            $table->editColumn('activity_reference', function ($row) {
                return $row->activity_reference ? $row->activity_reference : '';
            });
            $table->editColumn('activity_result', function ($row) {
                return $row->activity_result ? $row->activity_result : '';
            });
            $table->editColumn('activity_completed_date', function ($row) {
                return $row->activity_completed_date ? $row->activity_completed_date : '';
            });
            $table->editColumn('activity_due_date', function ($row) {
                return $row->activity_due_date ? $row->activity_due_date : '';
            });
            $table->editColumn('activity_reminder_minutes', function ($row) {
                return $row->activity_reminder_minutes ? $row->activity_reminder_minutes : '';
            });
            $table->editColumn('activity_notes', function ($row) {
                return $row->activity_notes ? $row->activity_notes : '';
            });
            $table->editColumn('appt', function ($row) {
                return $row->appt ? $row->appt : '';
            });
            $table->editColumn('activity_assign_emp', function ($row) {
                return $row->activity_assign_emp ? $row->activity_assign_emp : '';
            });
            $table->editColumn('activity_sched_emp', function ($row) {
                return $row->activity_sched_emp ? $row->activity_sched_emp : '';
            });
            $table->editColumn('activity_reminder_is_dismissed', function ($row) {
                return $row->activity_reminder_is_dismissed ? $row->activity_reminder_is_dismissed : '';
            });
            $table->editColumn('is_active', function ($row) {
                return $row->is_active ? $row->is_active : '';
            });
            $table->editColumn('last_updateby', function ($row) {
                return $row->last_updateby ? $row->last_updateby : '';
            });
            $table->editColumn('last_update', function ($row) {
                return $row->last_update ? $row->last_update : '';
            });
            $table->editColumn('id_led', function ($row) {
                return $row->id_led ? $row->id_led : '';
            });
            $table->editColumn('activityresultid', function ($row) {
                return $row->activityresultid ? $row->activityresultid : '';
            });
            $table->editColumn('activityreferenceid', function ($row) {
                return $row->activityreferenceid ? $row->activityreferenceid : '';
            });
            $table->editColumn('t_scheduler_event', function ($row) {
                return $row->t_scheduler_event ? $row->t_scheduler_event : '';
            });
            $table->editColumn('activity_process_step', function ($row) {
                return $row->activity_process_step ? $row->activity_process_step : '';
            });
            $table->editColumn('id_job', function ($row) {
                return $row->id_job ? $row->id_job : '';
            });
            $table->editColumn('process_type_steps', function ($row) {
                return $row->process_type_steps ? $row->process_type_steps : '';
            });
            $table->editColumn('service_order', function ($row) {
                return $row->service_order ? $row->service_order : '';
            });
            $table->editColumn('contact_marketing_queue', function ($row) {
                return $row->contact_marketing_queue ? $row->contact_marketing_queue : '';
            });
            $table->editColumn('column_27', function ($row) {
                return $row->column_27 ? $row->column_27 : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'lead', 'job']);

            return $table->make(true);
        }

        $leads = Lead::get();
        $jobs  = Job::get();

        return view('admin.activities.index', compact('leads', 'jobs'));
    }

    public function create()
    {
        abort_if(Gate::denies('activity_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leads = Lead::pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $jobs = Job::pluck('job_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.activities.create', compact('leads', 'jobs'));
    }

    public function store(StoreActivityRequest $request)
    {
        $activity = Activity::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $activity->id]);
        }

        return redirect()->route('admin.activities.index');
    }

    public function edit(Activity $activity)
    {
        abort_if(Gate::denies('activity_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leads = Lead::pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $jobs = Job::pluck('job_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $activity->load('lead', 'job');

        return view('admin.activities.edit', compact('leads', 'jobs', 'activity'));
    }

    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        $activity->update($request->all());

        return redirect()->route('admin.activities.index');
    }

    public function show(Activity $activity)
    {
        abort_if(Gate::denies('activity_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activity->load('lead', 'job');

        return view('admin.activities.show', compact('activity'));
    }

    public function destroy(Activity $activity)
    {
        abort_if(Gate::denies('activity_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activity->delete();

        return back();
    }

    public function massDestroy(MassDestroyActivityRequest $request)
    {
        Activity::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('activity_create') && Gate::denies('activity_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Activity();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyJobEventRequest;
use App\Http\Requests\StoreJobEventRequest;
use App\Http\Requests\UpdateJobEventRequest;
use App\Models\JobEvent;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class JobEventsController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('job_event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = JobEvent::query()->select(sprintf('%s.*', (new JobEvent())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'job_event_show';
                $editGate = 'job_event_edit';
                $deleteGate = 'job_event_delete';
                $crudRoutePart = 'job-events';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : '';
            });
            $table->editColumn('attachment', function ($row) {
                return $row->attachment ? '<a href="' . $row->attachment->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>' : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'attachment']);

            return $table->make(true);
        }

        return view('admin.jobEvents.index');
    }

    public function create()
    {
        abort_if(Gate::denies('job_event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jobEvents.create');
    }

    public function store(StoreJobEventRequest $request)
    {
        $jobEvent = JobEvent::create($request->all());

        if ($request->input('attachment', false)) {
            $jobEvent->addMedia(storage_path('tmp/uploads/' . basename($request->input('attachment'))))->toMediaCollection('attachment');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $jobEvent->id]);
        }

        return redirect()->route('admin.job-events.index');
    }

    public function edit(JobEvent $jobEvent)
    {
        abort_if(Gate::denies('job_event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jobEvents.edit', compact('jobEvent'));
    }

    public function update(UpdateJobEventRequest $request, JobEvent $jobEvent)
    {
        $jobEvent->update($request->all());

        if ($request->input('attachment', false)) {
            if (!$jobEvent->attachment || $request->input('attachment') !== $jobEvent->attachment->file_name) {
                if ($jobEvent->attachment) {
                    $jobEvent->attachment->delete();
                }
                $jobEvent->addMedia(storage_path('tmp/uploads/' . basename($request->input('attachment'))))->toMediaCollection('attachment');
            }
        } elseif ($jobEvent->attachment) {
            $jobEvent->attachment->delete();
        }

        return redirect()->route('admin.job-events.index');
    }

    public function show(JobEvent $jobEvent)
    {
        abort_if(Gate::denies('job_event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jobEvents.show', compact('jobEvent'));
    }

    public function destroy(JobEvent $jobEvent)
    {
        abort_if(Gate::denies('job_event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobEvent->delete();

        return back();
    }

    public function massDestroy(MassDestroyJobEventRequest $request)
    {
        JobEvent::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('job_event_create') && Gate::denies('job_event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new JobEvent();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

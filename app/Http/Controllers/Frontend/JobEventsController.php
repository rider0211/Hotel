<?php

namespace App\Http\Controllers\Frontend;

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

class JobEventsController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('job_event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobEvents = JobEvent::with(['media'])->get();

        return view('frontend.jobEvents.index', compact('jobEvents'));
    }

    public function create()
    {
        abort_if(Gate::denies('job_event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.jobEvents.create');
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

        return redirect()->route('frontend.job-events.index');
    }

    public function edit(JobEvent $jobEvent)
    {
        abort_if(Gate::denies('job_event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.jobEvents.edit', compact('jobEvent'));
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

        return redirect()->route('frontend.job-events.index');
    }

    public function show(JobEvent $jobEvent)
    {
        abort_if(Gate::denies('job_event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.jobEvents.show', compact('jobEvent'));
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

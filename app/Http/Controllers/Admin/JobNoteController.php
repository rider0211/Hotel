<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyJobNoteRequest;
use App\Http\Requests\StoreJobNoteRequest;
use App\Http\Requests\UpdateJobNoteRequest;
use App\Models\JobNote;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class JobNoteController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('job_note_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobNotes = JobNote::all();

        return view('admin.jobNotes.index', compact('jobNotes'));
    }

    public function create()
    {
        abort_if(Gate::denies('job_note_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jobNotes.create');
    }

    public function store(StoreJobNoteRequest $request)
    {
        $jobNote = JobNote::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $jobNote->id]);
        }

        return redirect()->route('admin.job-notes.index');
    }

    public function edit(JobNote $jobNote)
    {
        abort_if(Gate::denies('job_note_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jobNotes.edit', compact('jobNote'));
    }

    public function update(UpdateJobNoteRequest $request, JobNote $jobNote)
    {
        $jobNote->update($request->all());

        return redirect()->route('admin.job-notes.index');
    }

    public function show(JobNote $jobNote)
    {
        abort_if(Gate::denies('job_note_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jobNotes.show', compact('jobNote'));
    }

    public function destroy(JobNote $jobNote)
    {
        abort_if(Gate::denies('job_note_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobNote->delete();

        return back();
    }

    public function massDestroy(MassDestroyJobNoteRequest $request)
    {
        JobNote::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('job_note_create') && Gate::denies('job_note_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new JobNote();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

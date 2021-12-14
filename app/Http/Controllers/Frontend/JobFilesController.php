<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyJobFileRequest;
use App\Http\Requests\StoreJobFileRequest;
use App\Http\Requests\UpdateJobFileRequest;
use App\Models\JobFile;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class JobFilesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('job_file_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobFiles = JobFile::with(['media'])->get();

        return view('frontend.jobFiles.index', compact('jobFiles'));
    }

    public function create()
    {
        abort_if(Gate::denies('job_file_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.jobFiles.create');
    }

    public function store(StoreJobFileRequest $request)
    {
        $jobFile = JobFile::create($request->all());

        foreach ($request->input('jfile_name', []) as $file) {
            $jobFile->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('jfile_name');
        }

        foreach ($request->input('jfile_photo', []) as $file) {
            $jobFile->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('jfile_photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $jobFile->id]);
        }

        return redirect()->route('frontend.job-files.index');
    }

    public function edit(JobFile $jobFile)
    {
        abort_if(Gate::denies('job_file_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.jobFiles.edit', compact('jobFile'));
    }

    public function update(UpdateJobFileRequest $request, JobFile $jobFile)
    {
        $jobFile->update($request->all());

        if (count($jobFile->jfile_name) > 0) {
            foreach ($jobFile->jfile_name as $media) {
                if (!in_array($media->file_name, $request->input('jfile_name', []))) {
                    $media->delete();
                }
            }
        }
        $media = $jobFile->jfile_name->pluck('file_name')->toArray();
        foreach ($request->input('jfile_name', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $jobFile->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('jfile_name');
            }
        }

        if (count($jobFile->jfile_photo) > 0) {
            foreach ($jobFile->jfile_photo as $media) {
                if (!in_array($media->file_name, $request->input('jfile_photo', []))) {
                    $media->delete();
                }
            }
        }
        $media = $jobFile->jfile_photo->pluck('file_name')->toArray();
        foreach ($request->input('jfile_photo', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $jobFile->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('jfile_photo');
            }
        }

        return redirect()->route('frontend.job-files.index');
    }

    public function show(JobFile $jobFile)
    {
        abort_if(Gate::denies('job_file_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.jobFiles.show', compact('jobFile'));
    }

    public function destroy(JobFile $jobFile)
    {
        abort_if(Gate::denies('job_file_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $jobFile->delete();

        return back();
    }

    public function massDestroy(MassDestroyJobFileRequest $request)
    {
        JobFile::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('job_file_create') && Gate::denies('job_file_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new JobFile();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

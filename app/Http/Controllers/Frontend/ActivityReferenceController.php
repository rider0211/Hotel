<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyActivityReferenceRequest;
use App\Http\Requests\StoreActivityReferenceRequest;
use App\Http\Requests\UpdateActivityReferenceRequest;
use App\Models\ActivityReference;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ActivityReferenceController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('activity_reference_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activityReferences = ActivityReference::all();

        return view('frontend.activityReferences.index', compact('activityReferences'));
    }

    public function create()
    {
        abort_if(Gate::denies('activity_reference_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.activityReferences.create');
    }

    public function store(StoreActivityReferenceRequest $request)
    {
        $activityReference = ActivityReference::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $activityReference->id]);
        }

        return redirect()->route('frontend.activity-references.index');
    }

    public function edit(ActivityReference $activityReference)
    {
        abort_if(Gate::denies('activity_reference_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.activityReferences.edit', compact('activityReference'));
    }

    public function update(UpdateActivityReferenceRequest $request, ActivityReference $activityReference)
    {
        $activityReference->update($request->all());

        return redirect()->route('frontend.activity-references.index');
    }

    public function show(ActivityReference $activityReference)
    {
        abort_if(Gate::denies('activity_reference_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.activityReferences.show', compact('activityReference'));
    }

    public function destroy(ActivityReference $activityReference)
    {
        abort_if(Gate::denies('activity_reference_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activityReference->delete();

        return back();
    }

    public function massDestroy(MassDestroyActivityReferenceRequest $request)
    {
        ActivityReference::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('activity_reference_create') && Gate::denies('activity_reference_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ActivityReference();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

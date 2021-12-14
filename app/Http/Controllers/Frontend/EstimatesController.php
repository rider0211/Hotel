<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEstimateRequest;
use App\Http\Requests\StoreEstimateRequest;
use App\Http\Requests\UpdateEstimateRequest;
use App\Models\Estimate;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class EstimatesController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('estimate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $estimates = Estimate::all();

        return view('frontend.estimates.index', compact('estimates'));
    }

    public function create()
    {
        abort_if(Gate::denies('estimate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.estimates.create');
    }

    public function store(StoreEstimateRequest $request)
    {
        $estimate = Estimate::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $estimate->id]);
        }

        return redirect()->route('frontend.estimates.index');
    }

    public function edit(Estimate $estimate)
    {
        abort_if(Gate::denies('estimate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.estimates.edit', compact('estimate'));
    }

    public function update(UpdateEstimateRequest $request, Estimate $estimate)
    {
        $estimate->update($request->all());

        return redirect()->route('frontend.estimates.index');
    }

    public function show(Estimate $estimate)
    {
        abort_if(Gate::denies('estimate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.estimates.show', compact('estimate'));
    }

    public function destroy(Estimate $estimate)
    {
        abort_if(Gate::denies('estimate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $estimate->delete();

        return back();
    }

    public function massDestroy(MassDestroyEstimateRequest $request)
    {
        Estimate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('estimate_create') && Gate::denies('estimate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Estimate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

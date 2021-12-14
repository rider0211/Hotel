<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyActivityResultRequest;
use App\Http\Requests\StoreActivityResultRequest;
use App\Http\Requests\UpdateActivityResultRequest;
use App\Models\ActivityResult;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActivityResultController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('activity_result_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activityResults = ActivityResult::all();

        return view('admin.activityResults.index', compact('activityResults'));
    }

    public function create()
    {
        abort_if(Gate::denies('activity_result_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activityResults.create');
    }

    public function store(StoreActivityResultRequest $request)
    {
        $activityResult = ActivityResult::create($request->all());

        return redirect()->route('admin.activity-results.index');
    }

    public function edit(ActivityResult $activityResult)
    {
        abort_if(Gate::denies('activity_result_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activityResults.edit', compact('activityResult'));
    }

    public function update(UpdateActivityResultRequest $request, ActivityResult $activityResult)
    {
        $activityResult->update($request->all());

        return redirect()->route('admin.activity-results.index');
    }

    public function show(ActivityResult $activityResult)
    {
        abort_if(Gate::denies('activity_result_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activityResults.show', compact('activityResult'));
    }

    public function destroy(ActivityResult $activityResult)
    {
        abort_if(Gate::denies('activity_result_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activityResult->delete();

        return back();
    }

    public function massDestroy(MassDestroyActivityResultRequest $request)
    {
        ActivityResult::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyActivityTypeRequest;
use App\Http\Requests\StoreActivityTypeRequest;
use App\Http\Requests\UpdateActivityTypeRequest;
use App\Models\ActivityType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActivityTypeController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('activity_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activityTypes = ActivityType::all();

        return view('frontend.activityTypes.index', compact('activityTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('activity_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.activityTypes.create');
    }

    public function store(StoreActivityTypeRequest $request)
    {
        $activityType = ActivityType::create($request->all());

        return redirect()->route('frontend.activity-types.index');
    }

    public function edit(ActivityType $activityType)
    {
        abort_if(Gate::denies('activity_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.activityTypes.edit', compact('activityType'));
    }

    public function update(UpdateActivityTypeRequest $request, ActivityType $activityType)
    {
        $activityType->update($request->all());

        return redirect()->route('frontend.activity-types.index');
    }

    public function show(ActivityType $activityType)
    {
        abort_if(Gate::denies('activity_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.activityTypes.show', compact('activityType'));
    }

    public function destroy(ActivityType $activityType)
    {
        abort_if(Gate::denies('activity_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $activityType->delete();

        return back();
    }

    public function massDestroy(MassDestroyActivityTypeRequest $request)
    {
        ActivityType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

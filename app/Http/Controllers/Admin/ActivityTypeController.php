<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyActivityTypeRequest;
use App\Http\Requests\StoreActivityTypeRequest;
use App\Http\Requests\UpdateActivityTypeRequest;
use App\Models\ActivityType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ActivityTypeController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('activity_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = ActivityType::query()->select(sprintf('%s.*', (new ActivityType())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'activity_type_show';
                $editGate = 'activity_type_edit';
                $deleteGate = 'activity_type_delete';
                $crudRoutePart = 'activity-types';

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
            $table->editColumn('act_type', function ($row) {
                return $row->act_type ? $row->act_type : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.activityTypes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('activity_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activityTypes.create');
    }

    public function store(StoreActivityTypeRequest $request)
    {
        $activityType = ActivityType::create($request->all());

        return redirect()->route('admin.activity-types.index');
    }

    public function edit(ActivityType $activityType)
    {
        abort_if(Gate::denies('activity_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activityTypes.edit', compact('activityType'));
    }

    public function update(UpdateActivityTypeRequest $request, ActivityType $activityType)
    {
        $activityType->update($request->all());

        return redirect()->route('admin.activity-types.index');
    }

    public function show(ActivityType $activityType)
    {
        abort_if(Gate::denies('activity_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.activityTypes.show', compact('activityType'));
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

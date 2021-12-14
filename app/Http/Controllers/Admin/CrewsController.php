<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCrewRequest;
use App\Http\Requests\StoreCrewRequest;
use App\Http\Requests\UpdateCrewRequest;
use App\Models\Crew;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CrewsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('crew_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crews = Crew::all();

        return view('admin.crews.index', compact('crews'));
    }

    public function create()
    {
        abort_if(Gate::denies('crew_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.crews.create');
    }

    public function store(StoreCrewRequest $request)
    {
        $crew = Crew::create($request->all());

        return redirect()->route('admin.crews.index');
    }

    public function edit(Crew $crew)
    {
        abort_if(Gate::denies('crew_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.crews.edit', compact('crew'));
    }

    public function update(UpdateCrewRequest $request, Crew $crew)
    {
        $crew->update($request->all());

        return redirect()->route('admin.crews.index');
    }

    public function show(Crew $crew)
    {
        abort_if(Gate::denies('crew_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.crews.show', compact('crew'));
    }

    public function destroy(Crew $crew)
    {
        abort_if(Gate::denies('crew_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $crew->delete();

        return back();
    }

    public function massDestroy(MassDestroyCrewRequest $request)
    {
        Crew::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

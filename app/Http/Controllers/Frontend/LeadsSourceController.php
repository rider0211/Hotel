<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyLeadsSourceRequest;
use App\Http\Requests\StoreLeadsSourceRequest;
use App\Http\Requests\UpdateLeadsSourceRequest;
use App\Models\LeadsSource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LeadsSourceController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('leads_source_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leadsSources = LeadsSource::all();

        return view('frontend.leadsSources.index', compact('leadsSources'));
    }

    public function create()
    {
        abort_if(Gate::denies('leads_source_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.leadsSources.create');
    }

    public function store(StoreLeadsSourceRequest $request)
    {
        $leadsSource = LeadsSource::create($request->all());

        return redirect()->route('frontend.leads-sources.index');
    }

    public function edit(LeadsSource $leadsSource)
    {
        abort_if(Gate::denies('leads_source_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.leadsSources.edit', compact('leadsSource'));
    }

    public function update(UpdateLeadsSourceRequest $request, LeadsSource $leadsSource)
    {
        $leadsSource->update($request->all());

        return redirect()->route('frontend.leads-sources.index');
    }

    public function show(LeadsSource $leadsSource)
    {
        abort_if(Gate::denies('leads_source_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.leadsSources.show', compact('leadsSource'));
    }

    public function destroy(LeadsSource $leadsSource)
    {
        abort_if(Gate::denies('leads_source_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leadsSource->delete();

        return back();
    }

    public function massDestroy(MassDestroyLeadsSourceRequest $request)
    {
        LeadsSource::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyLeadStatusRequest;
use App\Http\Requests\StoreLeadStatusRequest;
use App\Http\Requests\UpdateLeadStatusRequest;
use App\Models\LeadStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LeadStatusController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('lead_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leadStatuses = LeadStatus::all();

        return view('frontend.leadStatuses.index', compact('leadStatuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('lead_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.leadStatuses.create');
    }

    public function store(StoreLeadStatusRequest $request)
    {
        $leadStatus = LeadStatus::create($request->all());

        return redirect()->route('frontend.lead-statuses.index');
    }

    public function edit(LeadStatus $leadStatus)
    {
        abort_if(Gate::denies('lead_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.leadStatuses.edit', compact('leadStatus'));
    }

    public function update(UpdateLeadStatusRequest $request, LeadStatus $leadStatus)
    {
        $leadStatus->update($request->all());

        return redirect()->route('frontend.lead-statuses.index');
    }

    public function show(LeadStatus $leadStatus)
    {
        abort_if(Gate::denies('lead_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.leadStatuses.show', compact('leadStatus'));
    }

    public function destroy(LeadStatus $leadStatus)
    {
        abort_if(Gate::denies('lead_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leadStatus->delete();

        return back();
    }

    public function massDestroy(MassDestroyLeadStatusRequest $request)
    {
        LeadStatus::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

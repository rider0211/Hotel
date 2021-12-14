<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyLeadStatusManagerRequest;
use App\Http\Requests\StoreLeadStatusManagerRequest;
use App\Http\Requests\UpdateLeadStatusManagerRequest;
use App\Models\ActivityResult;
use App\Models\LeadStatus;
use App\Models\LeadStatusManager;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LeadStatusManagerController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('lead_status_manager_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leadStatusManagers = LeadStatusManager::with(['lead_status', 'activity_results'])->get();

        return view('frontend.leadStatusManagers.index', compact('leadStatusManagers'));
    }

    public function create()
    {
        abort_if(Gate::denies('lead_status_manager_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lead_statuses = LeadStatus::pluck('lead_stat', 'id')->prepend(trans('global.pleaseSelect'), '');

        $activity_results = ActivityResult::pluck('result', 'id');

        return view('frontend.leadStatusManagers.create', compact('lead_statuses', 'activity_results'));
    }

    public function store(StoreLeadStatusManagerRequest $request)
    {
        $leadStatusManager = LeadStatusManager::create($request->all());
        $leadStatusManager->activity_results()->sync($request->input('activity_results', []));

        return redirect()->route('frontend.lead-status-managers.index');
    }

    public function edit(LeadStatusManager $leadStatusManager)
    {
        abort_if(Gate::denies('lead_status_manager_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lead_statuses = LeadStatus::pluck('lead_stat', 'id')->prepend(trans('global.pleaseSelect'), '');

        $activity_results = ActivityResult::pluck('result', 'id');

        $leadStatusManager->load('lead_status', 'activity_results');

        return view('frontend.leadStatusManagers.edit', compact('lead_statuses', 'activity_results', 'leadStatusManager'));
    }

    public function update(UpdateLeadStatusManagerRequest $request, LeadStatusManager $leadStatusManager)
    {
        $leadStatusManager->update($request->all());
        $leadStatusManager->activity_results()->sync($request->input('activity_results', []));

        return redirect()->route('frontend.lead-status-managers.index');
    }

    public function show(LeadStatusManager $leadStatusManager)
    {
        abort_if(Gate::denies('lead_status_manager_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leadStatusManager->load('lead_status', 'activity_results');

        return view('frontend.leadStatusManagers.show', compact('leadStatusManager'));
    }

    public function destroy(LeadStatusManager $leadStatusManager)
    {
        abort_if(Gate::denies('lead_status_manager_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leadStatusManager->delete();

        return back();
    }

    public function massDestroy(MassDestroyLeadStatusManagerRequest $request)
    {
        LeadStatusManager::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

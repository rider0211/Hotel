<?php

namespace App\Http\Controllers\Admin;

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
use Yajra\DataTables\Facades\DataTables;

class LeadStatusManagerController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('lead_status_manager_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = LeadStatusManager::with(['lead_status', 'activity_results'])->select(sprintf('%s.*', (new LeadStatusManager())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'lead_status_manager_show';
                $editGate = 'lead_status_manager_edit';
                $deleteGate = 'lead_status_manager_delete';
                $crudRoutePart = 'lead-status-managers';

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
            $table->editColumn('is_active', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->is_active ? 'checked' : null) . '>';
            });
            $table->addColumn('lead_status_lead_stat', function ($row) {
                return $row->lead_status ? $row->lead_status->lead_stat : '';
            });

            $table->editColumn('activity_result', function ($row) {
                $labels = [];
                foreach ($row->activity_results as $activity_result) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $activity_result->result);
                }

                return implode(' ', $labels);
            });

            $table->rawColumns(['actions', 'placeholder', 'is_active', 'lead_status', 'activity_result']);

            return $table->make(true);
        }

        return view('admin.leadStatusManagers.index');
    }

    public function create()
    {
        abort_if(Gate::denies('lead_status_manager_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lead_statuses = LeadStatus::pluck('lead_stat', 'id')->prepend(trans('global.pleaseSelect'), '');

        $activity_results = ActivityResult::pluck('result', 'id');

        return view('admin.leadStatusManagers.create', compact('lead_statuses', 'activity_results'));
    }

    public function store(StoreLeadStatusManagerRequest $request)
    {
        $leadStatusManager = LeadStatusManager::create($request->all());
        $leadStatusManager->activity_results()->sync($request->input('activity_results', []));

        return redirect()->route('admin.lead-status-managers.index');
    }

    public function edit(LeadStatusManager $leadStatusManager)
    {
        abort_if(Gate::denies('lead_status_manager_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lead_statuses = LeadStatus::pluck('lead_stat', 'id')->prepend(trans('global.pleaseSelect'), '');

        $activity_results = ActivityResult::pluck('result', 'id');

        $leadStatusManager->load('lead_status', 'activity_results');

        return view('admin.leadStatusManagers.edit', compact('lead_statuses', 'activity_results', 'leadStatusManager'));
    }

    public function update(UpdateLeadStatusManagerRequest $request, LeadStatusManager $leadStatusManager)
    {
        $leadStatusManager->update($request->all());
        $leadStatusManager->activity_results()->sync($request->input('activity_results', []));

        return redirect()->route('admin.lead-status-managers.index');
    }

    public function show(LeadStatusManager $leadStatusManager)
    {
        abort_if(Gate::denies('lead_status_manager_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leadStatusManager->load('lead_status', 'activity_results');

        return view('admin.leadStatusManagers.show', compact('leadStatusManager'));
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

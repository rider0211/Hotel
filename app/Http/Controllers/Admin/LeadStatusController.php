<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyLeadStatusRequest;
use App\Http\Requests\StoreLeadStatusRequest;
use App\Http\Requests\UpdateLeadStatusRequest;
use App\Models\LeadStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LeadStatusController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('lead_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = LeadStatus::query()->select(sprintf('%s.*', (new LeadStatus())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'lead_status_show';
                $editGate = 'lead_status_edit';
                $deleteGate = 'lead_status_delete';
                $crudRoutePart = 'lead-statuses';

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
            $table->editColumn('lead_stat', function ($row) {
                return $row->lead_stat ? $row->lead_stat : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.leadStatuses.index');
    }

    public function create()
    {
        abort_if(Gate::denies('lead_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leadStatuses.create');
    }

    public function store(StoreLeadStatusRequest $request)
    {
        $leadStatus = LeadStatus::create($request->all());

        return redirect()->route('admin.lead-statuses.index');
    }

    public function edit(LeadStatus $leadStatus)
    {
        abort_if(Gate::denies('lead_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leadStatuses.edit', compact('leadStatus'));
    }

    public function update(UpdateLeadStatusRequest $request, LeadStatus $leadStatus)
    {
        $leadStatus->update($request->all());

        return redirect()->route('admin.lead-statuses.index');
    }

    public function show(LeadStatus $leadStatus)
    {
        abort_if(Gate::denies('lead_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leadStatuses.show', compact('leadStatus'));
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

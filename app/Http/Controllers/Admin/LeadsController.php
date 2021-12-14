<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyLeadRequest;
use App\Http\Requests\StoreLeadRequest;
use App\Http\Requests\UpdateLeadRequest;
use App\Models\Lead;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LeadsController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('lead_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Lead::query()->select(sprintf('%s.*', (new Lead())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'lead_show';
                $editGate = 'lead_edit';
                $deleteGate = 'lead_delete';
                $crudRoutePart = 'leads';

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
            $table->editColumn('first_name', function ($row) {
                return $row->first_name ? $row->first_name : '';
            });
            $table->editColumn('last_name', function ($row) {
                return $row->last_name ? $row->last_name : '';
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : '';
            });
            $table->editColumn('email_2', function ($row) {
                return $row->email_2 ? $row->email_2 : '';
            });
            $table->editColumn('phone', function ($row) {
                return $row->phone ? $row->phone : '';
            });
            $table->editColumn('phone_2', function ($row) {
                return $row->phone_2 ? $row->phone_2 : '';
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : '';
            });
            $table->editColumn('homephone', function ($row) {
                return $row->homephone ? $row->homephone : '';
            });
            $table->editColumn('goog_address', function ($row) {
                return $row->goog_address ? $row->goog_address : '';
            });
            $table->editColumn('lead_lon', function ($row) {
                return $row->lead_lon ? $row->lead_lon : '';
            });
            $table->editColumn('lead_lat', function ($row) {
                return $row->lead_lat ? $row->lead_lat : '';
            });
            $table->editColumn('lead_street', function ($row) {
                return $row->lead_street ? $row->lead_street : '';
            });
            $table->editColumn('lead_lot', function ($row) {
                return $row->lead_lot ? $row->lead_lot : '';
            });
            $table->editColumn('lead_city', function ($row) {
                return $row->lead_city ? $row->lead_city : '';
            });
            $table->editColumn('lead_state', function ($row) {
                return $row->lead_state ? $row->lead_state : '';
            });
            $table->editColumn('lead_zip', function ($row) {
                return $row->lead_zip ? $row->lead_zip : '';
            });
            $table->editColumn('lead_county', function ($row) {
                return $row->lead_county ? $row->lead_county : '';
            });
            $table->editColumn('dateassigned', function ($row) {
                return $row->dateassigned ? $row->dateassigned : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.leads.index');
    }

    public function create()
    {
        abort_if(Gate::denies('lead_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leads.create');
    }

    public function store(StoreLeadRequest $request)
    {
        $lead = Lead::create($request->all());

        return redirect()->route('admin.leads.index');
    }

    public function edit(Lead $lead)
    {
        abort_if(Gate::denies('lead_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leads.edit', compact('lead'));
    }

    public function update(UpdateLeadRequest $request, Lead $lead)
    {
        $lead->update($request->all());

        return redirect()->route('admin.leads.index');
    }

    public function show(Lead $lead)
    {
        abort_if(Gate::denies('lead_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lead->load('leadActivities', 'idLeadAppointments');

        return view('admin.leads.show', compact('lead'));
    }

    public function destroy(Lead $lead)
    {
        abort_if(Gate::denies('lead_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $lead->delete();

        return back();
    }

    public function massDestroy(MassDestroyLeadRequest $request)
    {
        Lead::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

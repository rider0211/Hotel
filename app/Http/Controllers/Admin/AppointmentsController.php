<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyAppointmentRequest;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Models\ActivityResult;
use App\Models\Appointment;
use App\Models\Lead;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AppointmentsController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('appointment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Appointment::with(['id_app_result', 'id_res_reason', 'id_lead', 'id_sales_assign', 'appt_set_by', 'id_last_update_by'])->select(sprintf('%s.*', (new Appointment())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'appointment_show';
                $editGate = 'appointment_edit';
                $deleteGate = 'appointment_delete';
                $crudRoutePart = 'appointments';

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

            $table->editColumn('appt_notes', function ($row) {
                return $row->appt_notes ? $row->appt_notes : '';
            });
            $table->addColumn('id_app_result_result', function ($row) {
                return $row->id_app_result ? $row->id_app_result->result : '';
            });

            $table->editColumn('ms_id_appt_result', function ($row) {
                return $row->ms_id_appt_result ? $row->ms_id_appt_result : '';
            });
            $table->addColumn('id_res_reason_result', function ($row) {
                return $row->id_res_reason ? $row->id_res_reason->result : '';
            });

            $table->editColumn('ms_id_appt_reason', function ($row) {
                return $row->ms_id_appt_reason ? $row->ms_id_appt_reason : '';
            });
            $table->editColumn('appt_result_code_description', function ($row) {
                return $row->appt_result_code_description ? $row->appt_result_code_description : '';
            });
            $table->editColumn('id_appt_type', function ($row) {
                return $row->id_appt_type ? $row->id_appt_type : '';
            });
            $table->editColumn('ms_id_appt_type', function ($row) {
                return $row->ms_id_appt_type ? $row->ms_id_appt_type : '';
            });
            $table->editColumn('ms_id_appt', function ($row) {
                return $row->ms_id_appt ? $row->ms_id_appt : '';
            });
            $table->editColumn('ms_id_lead', function ($row) {
                return $row->ms_id_lead ? $row->ms_id_lead : '';
            });
            $table->addColumn('id_lead_first_name', function ($row) {
                return $row->id_lead ? $row->id_lead->first_name : '';
            });

            $table->editColumn('id_lead.last_name', function ($row) {
                return $row->id_lead ? (is_string($row->id_lead) ? $row->id_lead : $row->id_lead->last_name) : '';
            });
            $table->editColumn('appt_sales_1_emp', function ($row) {
                return $row->appt_sales_1_emp ? $row->appt_sales_1_emp : '';
            });
            $table->addColumn('id_sales_assign_name', function ($row) {
                return $row->id_sales_assign ? $row->id_sales_assign->name : '';
            });

            $table->editColumn('appt_subject', function ($row) {
                return $row->appt_subject ? $row->appt_subject : '';
            });
            $table->editColumn('ms_appt_set_by', function ($row) {
                return $row->ms_appt_set_by ? $row->ms_appt_set_by : '';
            });
            $table->addColumn('appt_set_by_name', function ($row) {
                return $row->appt_set_by ? $row->appt_set_by->name : '';
            });

            $table->editColumn('confirmation_activity', function ($row) {
                return $row->confirmation_activity ? $row->confirmation_activity : '';
            });
            $table->editColumn('ms_id_sched', function ($row) {
                return $row->ms_id_sched ? $row->ms_id_sched : '';
            });
            $table->editColumn('is_active', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->is_active ? 'checked' : null) . '>';
            });
            $table->editColumn('ms_is_active', function ($row) {
                return $row->ms_is_active ? $row->ms_is_active : '';
            });
            $table->addColumn('id_last_update_by_name', function ($row) {
                return $row->id_last_update_by ? $row->id_last_update_by->name : '';
            });

            $table->editColumn('ms_id_last_update_by', function ($row) {
                return $row->ms_id_last_update_by ? $row->ms_id_last_update_by : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'id_app_result', 'id_res_reason', 'id_lead', 'id_sales_assign', 'appt_set_by', 'is_active', 'id_last_update_by']);

            return $table->make(true);
        }

        $activity_results = ActivityResult::get();
        $leads            = Lead::get();
        $users            = User::get();

        return view('admin.appointments.index', compact('activity_results', 'leads', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('appointment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $id_app_results = ActivityResult::pluck('result', 'id')->prepend(trans('global.pleaseSelect'), '');

        $id_res_reasons = ActivityResult::pluck('result', 'id')->prepend(trans('global.pleaseSelect'), '');

        $id_leads = Lead::pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $id_sales_assigns = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $id_last_update_bies = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.appointments.create', compact('id_app_results', 'id_res_reasons', 'id_leads', 'id_sales_assigns', 'id_last_update_bies'));
    }

    public function store(StoreAppointmentRequest $request)
    {
        $appointment = Appointment::create($request->all());

        return redirect()->route('admin.appointments.index');
    }

    public function edit(Appointment $appointment)
    {
        abort_if(Gate::denies('appointment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $id_app_results = ActivityResult::pluck('result', 'id')->prepend(trans('global.pleaseSelect'), '');

        $id_res_reasons = ActivityResult::pluck('result', 'id')->prepend(trans('global.pleaseSelect'), '');

        $id_leads = Lead::pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $id_sales_assigns = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $id_last_update_bies = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $appointment->load('id_app_result', 'id_res_reason', 'id_lead', 'id_sales_assign', 'appt_set_by', 'id_last_update_by');

        return view('admin.appointments.edit', compact('id_app_results', 'id_res_reasons', 'id_leads', 'id_sales_assigns', 'id_last_update_bies', 'appointment'));
    }

    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        $appointment->update($request->all());

        return redirect()->route('admin.appointments.index');
    }

    public function show(Appointment $appointment)
    {
        abort_if(Gate::denies('appointment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appointment->load('id_app_result', 'id_res_reason', 'id_lead', 'id_sales_assign', 'appt_set_by', 'id_last_update_by');

        return view('admin.appointments.show', compact('appointment'));
    }

    public function destroy(Appointment $appointment)
    {
        abort_if(Gate::denies('appointment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appointment->delete();

        return back();
    }

    public function massDestroy(MassDestroyAppointmentRequest $request)
    {
        Appointment::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

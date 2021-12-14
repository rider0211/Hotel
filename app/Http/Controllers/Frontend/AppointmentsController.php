<?php

namespace App\Http\Controllers\Frontend;

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

class AppointmentsController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('appointment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appointments = Appointment::with(['id_app_result', 'id_res_reason', 'id_lead', 'id_sales_assign', 'appt_set_by', 'id_last_update_by'])->get();

        $activity_results = ActivityResult::get();

        $leads = Lead::get();

        $users = User::get();

        return view('frontend.appointments.index', compact('appointments', 'activity_results', 'leads', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('appointment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $id_app_results = ActivityResult::pluck('result', 'id')->prepend(trans('global.pleaseSelect'), '');

        $id_res_reasons = ActivityResult::pluck('result', 'id')->prepend(trans('global.pleaseSelect'), '');

        $id_leads = Lead::pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $id_sales_assigns = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $id_last_update_bies = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.appointments.create', compact('id_app_results', 'id_res_reasons', 'id_leads', 'id_sales_assigns', 'id_last_update_bies'));
    }

    public function store(StoreAppointmentRequest $request)
    {
        $appointment = Appointment::create($request->all());

        return redirect()->route('frontend.appointments.index');
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

        return view('frontend.appointments.edit', compact('id_app_results', 'id_res_reasons', 'id_leads', 'id_sales_assigns', 'id_last_update_bies', 'appointment'));
    }

    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        $appointment->update($request->all());

        return redirect()->route('frontend.appointments.index');
    }

    public function show(Appointment $appointment)
    {
        abort_if(Gate::denies('appointment_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appointment->load('id_app_result', 'id_res_reason', 'id_lead', 'id_sales_assign', 'appt_set_by', 'id_last_update_by');

        return view('frontend.appointments.show', compact('appointment'));
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

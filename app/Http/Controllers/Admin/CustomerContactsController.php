<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyCustomerContactRequest;
use App\Http\Requests\StoreCustomerContactRequest;
use App\Http\Requests\UpdateCustomerContactRequest;
use App\Models\CustomerContact;
use App\Models\CustomerStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CustomerContactsController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('customer_contact_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = CustomerContact::with(['cust_status'])->select(sprintf('%s.*', (new CustomerContact())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'customer_contact_show';
                $editGate = 'customer_contact_edit';
                $deleteGate = 'customer_contact_delete';
                $crudRoutePart = 'customer-contacts';

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
            $table->editColumn('id_cust_status', function ($row) {
                return $row->id_cust_status ? $row->id_cust_status : '';
            });
            $table->addColumn('cust_status_cs_status', function ($row) {
                return $row->cust_status ? $row->cust_status->cs_status : '';
            });

            $table->editColumn('cust_fullname', function ($row) {
                return $row->cust_fullname ? $row->cust_fullname : '';
            });
            $table->editColumn('cust_title', function ($row) {
                return $row->cust_title ? $row->cust_title : '';
            });
            $table->editColumn('cust_vet', function ($row) {
                return $row->cust_vet ? CustomerContact::CUST_VET_SELECT[$row->cust_vet] : '';
            });
            $table->editColumn('cust_email', function ($row) {
                return $row->cust_email ? $row->cust_email : '';
            });
            $table->editColumn('ms_primary_email', function ($row) {
                return $row->ms_primary_email ? $row->ms_primary_email : '';
            });
            $table->editColumn('ms_secondary_email', function ($row) {
                return $row->ms_secondary_email ? $row->ms_secondary_email : '';
            });
            $table->editColumn('cust_email_2', function ($row) {
                return $row->cust_email_2 ? $row->cust_email_2 : '';
            });
            $table->editColumn('cust_phone', function ($row) {
                return $row->cust_phone ? $row->cust_phone : '';
            });
            $table->editColumn('cust_phone_2', function ($row) {
                return $row->cust_phone_2 ? $row->cust_phone_2 : '';
            });
            $table->editColumn('ms_phone', function ($row) {
                return $row->ms_phone ? $row->ms_phone : '';
            });
            $table->editColumn('cust_fax', function ($row) {
                return $row->cust_fax ? $row->cust_fax : '';
            });
            $table->editColumn('ms_address', function ($row) {
                return $row->ms_address ? $row->ms_address : '';
            });
            $table->editColumn('cust_address', function ($row) {
                return $row->cust_address ? $row->cust_address : '';
            });
            $table->editColumn('cust_route', function ($row) {
                return $row->cust_route ? $row->cust_route : '';
            });
            $table->editColumn('cust_city', function ($row) {
                return $row->cust_city ? $row->cust_city : '';
            });
            $table->editColumn('cust_state', function ($row) {
                return $row->cust_state ? $row->cust_state : '';
            });
            $table->editColumn('cust_zip', function ($row) {
                return $row->cust_zip ? $row->cust_zip : '';
            });
            $table->editColumn('cust_county', function ($row) {
                return $row->cust_county ? $row->cust_county : '';
            });
            $table->editColumn('cust_lat', function ($row) {
                return $row->cust_lat ? $row->cust_lat : '';
            });
            $table->editColumn('cust_lon', function ($row) {
                return $row->cust_lon ? $row->cust_lon : '';
            });
            $table->editColumn('cust_note', function ($row) {
                return $row->cust_note ? $row->cust_note : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'cust_status']);

            return $table->make(true);
        }

        $customer_statuses = CustomerStatus::get();

        return view('admin.customerContacts.index', compact('customer_statuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('customer_contact_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cust_statuses = CustomerStatus::pluck('cs_status', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.customerContacts.create', compact('cust_statuses'));
    }

    public function store(StoreCustomerContactRequest $request)
    {
        $customerContact = CustomerContact::create($request->all());

        return redirect()->route('admin.customer-contacts.index');
    }

    public function edit(CustomerContact $customerContact)
    {
        abort_if(Gate::denies('customer_contact_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cust_statuses = CustomerStatus::pluck('cs_status', 'id')->prepend(trans('global.pleaseSelect'), '');

        $customerContact->load('cust_status');

        return view('admin.customerContacts.edit', compact('cust_statuses', 'customerContact'));
    }

    public function update(UpdateCustomerContactRequest $request, CustomerContact $customerContact)
    {
        $customerContact->update($request->all());

        return redirect()->route('admin.customer-contacts.index');
    }

    public function show(CustomerContact $customerContact)
    {
        abort_if(Gate::denies('customer_contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customerContact->load('cust_status');

        return view('admin.customerContacts.show', compact('customerContact'));
    }

    public function destroy(CustomerContact $customerContact)
    {
        abort_if(Gate::denies('customer_contact_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customerContact->delete();

        return back();
    }

    public function massDestroy(MassDestroyCustomerContactRequest $request)
    {
        CustomerContact::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

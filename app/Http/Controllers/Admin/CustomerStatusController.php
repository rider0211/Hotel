<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyCustomerStatusRequest;
use App\Http\Requests\StoreCustomerStatusRequest;
use App\Http\Requests\UpdateCustomerStatusRequest;
use App\Models\CustomerStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CustomerStatusController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('customer_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = CustomerStatus::query()->select(sprintf('%s.*', (new CustomerStatus())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'customer_status_show';
                $editGate = 'customer_status_edit';
                $deleteGate = 'customer_status_delete';
                $crudRoutePart = 'customer-statuses';

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
            $table->editColumn('cs_status', function ($row) {
                return $row->cs_status ? $row->cs_status : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.customerStatuses.index');
    }

    public function create()
    {
        abort_if(Gate::denies('customer_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.customerStatuses.create');
    }

    public function store(StoreCustomerStatusRequest $request)
    {
        $customerStatus = CustomerStatus::create($request->all());

        return redirect()->route('admin.customer-statuses.index');
    }

    public function edit(CustomerStatus $customerStatus)
    {
        abort_if(Gate::denies('customer_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.customerStatuses.edit', compact('customerStatus'));
    }

    public function update(UpdateCustomerStatusRequest $request, CustomerStatus $customerStatus)
    {
        $customerStatus->update($request->all());

        return redirect()->route('admin.customer-statuses.index');
    }

    public function show(CustomerStatus $customerStatus)
    {
        abort_if(Gate::denies('customer_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.customerStatuses.show', compact('customerStatus'));
    }

    public function destroy(CustomerStatus $customerStatus)
    {
        abort_if(Gate::denies('customer_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customerStatus->delete();

        return back();
    }

    public function massDestroy(MassDestroyCustomerStatusRequest $request)
    {
        CustomerStatus::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

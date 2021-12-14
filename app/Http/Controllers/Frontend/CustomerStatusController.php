<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyCustomerStatusRequest;
use App\Http\Requests\StoreCustomerStatusRequest;
use App\Http\Requests\UpdateCustomerStatusRequest;
use App\Models\CustomerStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomerStatusController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('customer_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $customerStatuses = CustomerStatus::all();

        return view('frontend.customerStatuses.index', compact('customerStatuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('customer_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.customerStatuses.create');
    }

    public function store(StoreCustomerStatusRequest $request)
    {
        $customerStatus = CustomerStatus::create($request->all());

        return redirect()->route('frontend.customer-statuses.index');
    }

    public function edit(CustomerStatus $customerStatus)
    {
        abort_if(Gate::denies('customer_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.customerStatuses.edit', compact('customerStatus'));
    }

    public function update(UpdateCustomerStatusRequest $request, CustomerStatus $customerStatus)
    {
        $customerStatus->update($request->all());

        return redirect()->route('frontend.customer-statuses.index');
    }

    public function show(CustomerStatus $customerStatus)
    {
        abort_if(Gate::denies('customer_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.customerStatuses.show', compact('customerStatus'));
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

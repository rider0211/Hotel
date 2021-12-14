<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyWorkOrderRequest;
use App\Http\Requests\StoreWorkOrderRequest;
use App\Http\Requests\UpdateWorkOrderRequest;
use App\Models\WorkOrder;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WorkOrdersController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('work_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workOrders = WorkOrder::all();

        return view('frontend.workOrders.index', compact('workOrders'));
    }

    public function create()
    {
        abort_if(Gate::denies('work_order_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.workOrders.create');
    }

    public function store(StoreWorkOrderRequest $request)
    {
        $workOrder = WorkOrder::create($request->all());

        return redirect()->route('frontend.work-orders.index');
    }

    public function edit(WorkOrder $workOrder)
    {
        abort_if(Gate::denies('work_order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.workOrders.edit', compact('workOrder'));
    }

    public function update(UpdateWorkOrderRequest $request, WorkOrder $workOrder)
    {
        $workOrder->update($request->all());

        return redirect()->route('frontend.work-orders.index');
    }

    public function show(WorkOrder $workOrder)
    {
        abort_if(Gate::denies('work_order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.workOrders.show', compact('workOrder'));
    }

    public function destroy(WorkOrder $workOrder)
    {
        abort_if(Gate::denies('work_order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $workOrder->delete();

        return back();
    }

    public function massDestroy(MassDestroyWorkOrderRequest $request)
    {
        WorkOrder::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

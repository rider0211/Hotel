<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyWorkOrderRequest;
use App\Http\Requests\StoreWorkOrderRequest;
use App\Http\Requests\UpdateWorkOrderRequest;
use App\Models\WorkOrder;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class WorkOrdersController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('work_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = WorkOrder::query()->select(sprintf('%s.*', (new WorkOrder())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'work_order_show';
                $editGate = 'work_order_edit';
                $deleteGate = 'work_order_delete';
                $crudRoutePart = 'work-orders';

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
            $table->editColumn('swo_title', function ($row) {
                return $row->swo_title ? $row->swo_title : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.workOrders.index');
    }

    public function create()
    {
        abort_if(Gate::denies('work_order_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workOrders.create');
    }

    public function store(StoreWorkOrderRequest $request)
    {
        $workOrder = WorkOrder::create($request->all());

        return redirect()->route('admin.work-orders.index');
    }

    public function edit(WorkOrder $workOrder)
    {
        abort_if(Gate::denies('work_order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workOrders.edit', compact('workOrder'));
    }

    public function update(UpdateWorkOrderRequest $request, WorkOrder $workOrder)
    {
        $workOrder->update($request->all());

        return redirect()->route('admin.work-orders.index');
    }

    public function show(WorkOrder $workOrder)
    {
        abort_if(Gate::denies('work_order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.workOrders.show', compact('workOrder'));
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyEstimateItemRequest;
use App\Http\Requests\StoreEstimateItemRequest;
use App\Http\Requests\UpdateEstimateItemRequest;
use App\Models\EstimateItem;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EstimateItemsController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('estimate_item_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = EstimateItem::query()->select(sprintf('%s.*', (new EstimateItem())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'estimate_item_show';
                $editGate = 'estimate_item_edit';
                $deleteGate = 'estimate_item_delete';
                $crudRoutePart = 'estimate-items';

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
            $table->editColumn('item_code', function ($row) {
                return $row->item_code ? $row->item_code : '';
            });
            $table->editColumn('item_name', function ($row) {
                return $row->item_name ? $row->item_name : '';
            });
            $table->editColumn('est_item_quantity', function ($row) {
                return $row->est_item_quantity ? $row->est_item_quantity : '';
            });
            $table->editColumn('est_item_price', function ($row) {
                return $row->est_item_price ? $row->est_item_price : '';
            });
            $table->editColumn('est_item_final_amount', function ($row) {
                return $row->est_item_final_amount ? $row->est_item_final_amount : '';
            });
            $table->editColumn('est_item_listprice', function ($row) {
                return $row->est_item_listprice ? $row->est_item_listprice : '';
            });
            $table->editColumn('est_item_venfactor', function ($row) {
                return $row->est_item_venfactor ? $row->est_item_venfactor : '';
            });
            $table->editColumn('est_item_factor_2', function ($row) {
                return $row->est_item_factor_2 ? $row->est_item_factor_2 : '';
            });
            $table->editColumn('est_item_factor_3', function ($row) {
                return $row->est_item_factor_3 ? $row->est_item_factor_3 : '';
            });
            $table->editColumn('est_item_margin', function ($row) {
                return $row->est_item_margin ? $row->est_item_margin : '';
            });
            $table->editColumn('est_item_cost', function ($row) {
                return $row->est_item_cost ? $row->est_item_cost : '';
            });
            $table->editColumn('est_item_profit', function ($row) {
                return $row->est_item_profit ? $row->est_item_profit : '';
            });
            $table->editColumn('est_private_detail', function ($row) {
                return $row->est_private_detail ? $row->est_private_detail : '';
            });
            $table->editColumn('est_extenditem_detail', function ($row) {
                return $row->est_extenditem_detail ? $row->est_extenditem_detail : '';
            });
            $table->editColumn('est_price_detail', function ($row) {
                return $row->est_price_detail ? $row->est_price_detail : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.estimateItems.index');
    }

    public function create()
    {
        abort_if(Gate::denies('estimate_item_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.estimateItems.create');
    }

    public function store(StoreEstimateItemRequest $request)
    {
        $estimateItem = EstimateItem::create($request->all());

        return redirect()->route('admin.estimate-items.index');
    }

    public function edit(EstimateItem $estimateItem)
    {
        abort_if(Gate::denies('estimate_item_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.estimateItems.edit', compact('estimateItem'));
    }

    public function update(UpdateEstimateItemRequest $request, EstimateItem $estimateItem)
    {
        $estimateItem->update($request->all());

        return redirect()->route('admin.estimate-items.index');
    }

    public function show(EstimateItem $estimateItem)
    {
        abort_if(Gate::denies('estimate_item_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.estimateItems.show', compact('estimateItem'));
    }

    public function destroy(EstimateItem $estimateItem)
    {
        abort_if(Gate::denies('estimate_item_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $estimateItem->delete();

        return back();
    }

    public function massDestroy(MassDestroyEstimateItemRequest $request)
    {
        EstimateItem::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

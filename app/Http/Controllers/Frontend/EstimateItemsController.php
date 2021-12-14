<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyEstimateItemRequest;
use App\Http\Requests\StoreEstimateItemRequest;
use App\Http\Requests\UpdateEstimateItemRequest;
use App\Models\EstimateItem;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EstimateItemsController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('estimate_item_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $estimateItems = EstimateItem::all();

        return view('frontend.estimateItems.index', compact('estimateItems'));
    }

    public function create()
    {
        abort_if(Gate::denies('estimate_item_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.estimateItems.create');
    }

    public function store(StoreEstimateItemRequest $request)
    {
        $estimateItem = EstimateItem::create($request->all());

        return redirect()->route('frontend.estimate-items.index');
    }

    public function edit(EstimateItem $estimateItem)
    {
        abort_if(Gate::denies('estimate_item_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.estimateItems.edit', compact('estimateItem'));
    }

    public function update(UpdateEstimateItemRequest $request, EstimateItem $estimateItem)
    {
        $estimateItem->update($request->all());

        return redirect()->route('frontend.estimate-items.index');
    }

    public function show(EstimateItem $estimateItem)
    {
        abort_if(Gate::denies('estimate_item_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.estimateItems.show', compact('estimateItem'));
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

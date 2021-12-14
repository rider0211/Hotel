<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPartsOrderRequest;
use App\Http\Requests\StorePartsOrderRequest;
use App\Http\Requests\UpdatePartsOrderRequest;
use App\Models\Job;
use App\Models\PartsOrder;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PartsOrderController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('parts_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partsOrders = PartsOrder::with(['realed_job'])->get();

        $jobs = Job::get();

        return view('frontend.partsOrders.index', compact('partsOrders', 'jobs'));
    }

    public function create()
    {
        abort_if(Gate::denies('parts_order_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $realed_jobs = Job::pluck('job_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.partsOrders.create', compact('realed_jobs'));
    }

    public function store(StorePartsOrderRequest $request)
    {
        $partsOrder = PartsOrder::create($request->all());

        return redirect()->route('frontend.parts-orders.index');
    }

    public function edit(PartsOrder $partsOrder)
    {
        abort_if(Gate::denies('parts_order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $realed_jobs = Job::pluck('job_title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $partsOrder->load('realed_job');

        return view('frontend.partsOrders.edit', compact('realed_jobs', 'partsOrder'));
    }

    public function update(UpdatePartsOrderRequest $request, PartsOrder $partsOrder)
    {
        $partsOrder->update($request->all());

        return redirect()->route('frontend.parts-orders.index');
    }

    public function show(PartsOrder $partsOrder)
    {
        abort_if(Gate::denies('parts_order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partsOrder->load('realed_job');

        return view('frontend.partsOrders.show', compact('partsOrder'));
    }

    public function destroy(PartsOrder $partsOrder)
    {
        abort_if(Gate::denies('parts_order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partsOrder->delete();

        return back();
    }

    public function massDestroy(MassDestroyPartsOrderRequest $request)
    {
        PartsOrder::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

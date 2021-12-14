<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyReceivingRequest;
use App\Http\Requests\StoreReceivingRequest;
use App\Http\Requests\UpdateReceivingRequest;
use App\Models\Receiving;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReceivingController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('receiving_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $receivings = Receiving::all();

        return view('admin.receivings.index', compact('receivings'));
    }

    public function create()
    {
        abort_if(Gate::denies('receiving_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.receivings.create');
    }

    public function store(StoreReceivingRequest $request)
    {
        $receiving = Receiving::create($request->all());

        return redirect()->route('admin.receivings.index');
    }

    public function edit(Receiving $receiving)
    {
        abort_if(Gate::denies('receiving_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.receivings.edit', compact('receiving'));
    }

    public function update(UpdateReceivingRequest $request, Receiving $receiving)
    {
        $receiving->update($request->all());

        return redirect()->route('admin.receivings.index');
    }

    public function show(Receiving $receiving)
    {
        abort_if(Gate::denies('receiving_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.receivings.show', compact('receiving'));
    }

    public function destroy(Receiving $receiving)
    {
        abort_if(Gate::denies('receiving_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $receiving->delete();

        return back();
    }

    public function massDestroy(MassDestroyReceivingRequest $request)
    {
        Receiving::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

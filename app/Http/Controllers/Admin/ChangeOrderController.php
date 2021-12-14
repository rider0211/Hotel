<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyChangeOrderRequest;
use App\Http\Requests\StoreChangeOrderRequest;
use App\Http\Requests\UpdateChangeOrderRequest;
use App\Models\ChangeOrder;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ChangeOrderController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('change_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $changeOrders = ChangeOrder::all();

        return view('admin.changeOrders.index', compact('changeOrders'));
    }

    public function create()
    {
        abort_if(Gate::denies('change_order_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.changeOrders.create');
    }

    public function store(StoreChangeOrderRequest $request)
    {
        $changeOrder = ChangeOrder::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $changeOrder->id]);
        }

        return redirect()->route('admin.change-orders.index');
    }

    public function edit(ChangeOrder $changeOrder)
    {
        abort_if(Gate::denies('change_order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.changeOrders.edit', compact('changeOrder'));
    }

    public function update(UpdateChangeOrderRequest $request, ChangeOrder $changeOrder)
    {
        $changeOrder->update($request->all());

        return redirect()->route('admin.change-orders.index');
    }

    public function show(ChangeOrder $changeOrder)
    {
        abort_if(Gate::denies('change_order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.changeOrders.show', compact('changeOrder'));
    }

    public function destroy(ChangeOrder $changeOrder)
    {
        abort_if(Gate::denies('change_order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $changeOrder->delete();

        return back();
    }

    public function massDestroy(MassDestroyChangeOrderRequest $request)
    {
        ChangeOrder::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('change_order_create') && Gate::denies('change_order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ChangeOrder();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

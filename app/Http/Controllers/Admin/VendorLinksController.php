<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyVendorLinkRequest;
use App\Http\Requests\StoreVendorLinkRequest;
use App\Http\Requests\UpdateVendorLinkRequest;
use App\Models\VendorLink;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class VendorLinksController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('vendor_link_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = VendorLink::query()->select(sprintf('%s.*', (new VendorLink())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'vendor_link_show';
                $editGate = 'vendor_link_edit';
                $deleteGate = 'vendor_link_delete';
                $crudRoutePart = 'vendor-links';

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
            $table->editColumn('ven_link', function ($row) {
                return $row->ven_link ? $row->ven_link : '';
            });
            $table->editColumn('vlink_type', function ($row) {
                return $row->vlink_type ? VendorLink::VLINK_TYPE_SELECT[$row->vlink_type] : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.vendorLinks.index');
    }

    public function create()
    {
        abort_if(Gate::denies('vendor_link_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.vendorLinks.create');
    }

    public function store(StoreVendorLinkRequest $request)
    {
        $vendorLink = VendorLink::create($request->all());

        return redirect()->route('admin.vendor-links.index');
    }

    public function edit(VendorLink $vendorLink)
    {
        abort_if(Gate::denies('vendor_link_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.vendorLinks.edit', compact('vendorLink'));
    }

    public function update(UpdateVendorLinkRequest $request, VendorLink $vendorLink)
    {
        $vendorLink->update($request->all());

        return redirect()->route('admin.vendor-links.index');
    }

    public function show(VendorLink $vendorLink)
    {
        abort_if(Gate::denies('vendor_link_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.vendorLinks.show', compact('vendorLink'));
    }

    public function destroy(VendorLink $vendorLink)
    {
        abort_if(Gate::denies('vendor_link_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vendorLink->delete();

        return back();
    }

    public function massDestroy(MassDestroyVendorLinkRequest $request)
    {
        VendorLink::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

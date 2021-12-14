<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyVendorLinkRequest;
use App\Http\Requests\StoreVendorLinkRequest;
use App\Http\Requests\UpdateVendorLinkRequest;
use App\Models\VendorLink;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VendorLinksController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('vendor_link_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vendorLinks = VendorLink::all();

        return view('frontend.vendorLinks.index', compact('vendorLinks'));
    }

    public function create()
    {
        abort_if(Gate::denies('vendor_link_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.vendorLinks.create');
    }

    public function store(StoreVendorLinkRequest $request)
    {
        $vendorLink = VendorLink::create($request->all());

        return redirect()->route('frontend.vendor-links.index');
    }

    public function edit(VendorLink $vendorLink)
    {
        abort_if(Gate::denies('vendor_link_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.vendorLinks.edit', compact('vendorLink'));
    }

    public function update(UpdateVendorLinkRequest $request, VendorLink $vendorLink)
    {
        $vendorLink->update($request->all());

        return redirect()->route('frontend.vendor-links.index');
    }

    public function show(VendorLink $vendorLink)
    {
        abort_if(Gate::denies('vendor_link_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.vendorLinks.show', compact('vendorLink'));
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

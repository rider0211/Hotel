<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyVendorFileRequest;
use App\Http\Requests\StoreVendorFileRequest;
use App\Http\Requests\UpdateVendorFileRequest;
use App\Models\VendorFile;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class VendorFilesController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('vendor_file_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vendorFiles = VendorFile::with(['media'])->get();

        return view('frontend.vendorFiles.index', compact('vendorFiles'));
    }

    public function create()
    {
        abort_if(Gate::denies('vendor_file_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.vendorFiles.create');
    }

    public function store(StoreVendorFileRequest $request)
    {
        $vendorFile = VendorFile::create($request->all());

        if ($request->input('ven_file', false)) {
            $vendorFile->addMedia(storage_path('tmp/uploads/' . basename($request->input('ven_file'))))->toMediaCollection('ven_file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $vendorFile->id]);
        }

        return redirect()->route('frontend.vendor-files.index');
    }

    public function edit(VendorFile $vendorFile)
    {
        abort_if(Gate::denies('vendor_file_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.vendorFiles.edit', compact('vendorFile'));
    }

    public function update(UpdateVendorFileRequest $request, VendorFile $vendorFile)
    {
        $vendorFile->update($request->all());

        if ($request->input('ven_file', false)) {
            if (!$vendorFile->ven_file || $request->input('ven_file') !== $vendorFile->ven_file->file_name) {
                if ($vendorFile->ven_file) {
                    $vendorFile->ven_file->delete();
                }
                $vendorFile->addMedia(storage_path('tmp/uploads/' . basename($request->input('ven_file'))))->toMediaCollection('ven_file');
            }
        } elseif ($vendorFile->ven_file) {
            $vendorFile->ven_file->delete();
        }

        return redirect()->route('frontend.vendor-files.index');
    }

    public function show(VendorFile $vendorFile)
    {
        abort_if(Gate::denies('vendor_file_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.vendorFiles.show', compact('vendorFile'));
    }

    public function destroy(VendorFile $vendorFile)
    {
        abort_if(Gate::denies('vendor_file_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vendorFile->delete();

        return back();
    }

    public function massDestroy(MassDestroyVendorFileRequest $request)
    {
        VendorFile::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('vendor_file_create') && Gate::denies('vendor_file_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new VendorFile();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

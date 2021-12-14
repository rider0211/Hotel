<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyLeadFileRequest;
use App\Http\Requests\StoreLeadFileRequest;
use App\Http\Requests\UpdateLeadFileRequest;
use App\Models\LeadFile;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LeadFilesController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('lead_file_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = LeadFile::query()->select(sprintf('%s.*', (new LeadFile())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'lead_file_show';
                $editGate = 'lead_file_edit';
                $deleteGate = 'lead_file_delete';
                $crudRoutePart = 'lead-files';

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
            $table->editColumn('jfile_title', function ($row) {
                return $row->jfile_title ? $row->jfile_title : '';
            });
            $table->editColumn('jfile_name', function ($row) {
                if (!$row->jfile_name) {
                    return '';
                }
                $links = [];
                foreach ($row->jfile_name as $media) {
                    $links[] = '<a href="' . $media->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>';
                }

                return implode(', ', $links);
            });
            $table->editColumn('jfile_photo', function ($row) {
                if (!$row->jfile_photo) {
                    return '';
                }
                $links = [];
                foreach ($row->jfile_photo as $media) {
                    $links[] = '<a href="' . $media->getUrl() . '" target="_blank"><img src="' . $media->getUrl('thumb') . '" width="50px" height="50px"></a>';
                }

                return implode(' ', $links);
            });

            $table->rawColumns(['actions', 'placeholder', 'jfile_name', 'jfile_photo']);

            return $table->make(true);
        }

        return view('admin.leadFiles.index');
    }

    public function create()
    {
        abort_if(Gate::denies('lead_file_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leadFiles.create');
    }

    public function store(StoreLeadFileRequest $request)
    {
        $leadFile = LeadFile::create($request->all());

        foreach ($request->input('jfile_name', []) as $file) {
            $leadFile->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('jfile_name');
        }

        foreach ($request->input('jfile_photo', []) as $file) {
            $leadFile->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('jfile_photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $leadFile->id]);
        }

        return redirect()->route('admin.lead-files.index');
    }

    public function edit(LeadFile $leadFile)
    {
        abort_if(Gate::denies('lead_file_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leadFiles.edit', compact('leadFile'));
    }

    public function update(UpdateLeadFileRequest $request, LeadFile $leadFile)
    {
        $leadFile->update($request->all());

        if (count($leadFile->jfile_name) > 0) {
            foreach ($leadFile->jfile_name as $media) {
                if (!in_array($media->file_name, $request->input('jfile_name', []))) {
                    $media->delete();
                }
            }
        }
        $media = $leadFile->jfile_name->pluck('file_name')->toArray();
        foreach ($request->input('jfile_name', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $leadFile->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('jfile_name');
            }
        }

        if (count($leadFile->jfile_photo) > 0) {
            foreach ($leadFile->jfile_photo as $media) {
                if (!in_array($media->file_name, $request->input('jfile_photo', []))) {
                    $media->delete();
                }
            }
        }
        $media = $leadFile->jfile_photo->pluck('file_name')->toArray();
        foreach ($request->input('jfile_photo', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $leadFile->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('jfile_photo');
            }
        }

        return redirect()->route('admin.lead-files.index');
    }

    public function show(LeadFile $leadFile)
    {
        abort_if(Gate::denies('lead_file_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leadFiles.show', compact('leadFile'));
    }

    public function destroy(LeadFile $leadFile)
    {
        abort_if(Gate::denies('lead_file_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leadFile->delete();

        return back();
    }

    public function massDestroy(MassDestroyLeadFileRequest $request)
    {
        LeadFile::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('lead_file_create') && Gate::denies('lead_file_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new LeadFile();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyLeadNoteRequest;
use App\Http\Requests\StoreLeadNoteRequest;
use App\Http\Requests\UpdateLeadNoteRequest;
use App\Models\LeadNote;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class LeadNoteController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('lead_note_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leadNotes = LeadNote::all();

        return view('frontend.leadNotes.index', compact('leadNotes'));
    }

    public function create()
    {
        abort_if(Gate::denies('lead_note_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.leadNotes.create');
    }

    public function store(StoreLeadNoteRequest $request)
    {
        $leadNote = LeadNote::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $leadNote->id]);
        }

        return redirect()->route('frontend.lead-notes.index');
    }

    public function edit(LeadNote $leadNote)
    {
        abort_if(Gate::denies('lead_note_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.leadNotes.edit', compact('leadNote'));
    }

    public function update(UpdateLeadNoteRequest $request, LeadNote $leadNote)
    {
        $leadNote->update($request->all());

        return redirect()->route('frontend.lead-notes.index');
    }

    public function show(LeadNote $leadNote)
    {
        abort_if(Gate::denies('lead_note_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.leadNotes.show', compact('leadNote'));
    }

    public function destroy(LeadNote $leadNote)
    {
        abort_if(Gate::denies('lead_note_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leadNote->delete();

        return back();
    }

    public function massDestroy(MassDestroyLeadNoteRequest $request)
    {
        LeadNote::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('lead_note_create') && Gate::denies('lead_note_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new LeadNote();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

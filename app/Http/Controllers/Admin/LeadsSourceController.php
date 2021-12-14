<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyLeadsSourceRequest;
use App\Http\Requests\StoreLeadsSourceRequest;
use App\Http\Requests\UpdateLeadsSourceRequest;
use App\Models\LeadsSource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class LeadsSourceController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('leads_source_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = LeadsSource::query()->select(sprintf('%s.*', (new LeadsSource())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'leads_source_show';
                $editGate = 'leads_source_edit';
                $deleteGate = 'leads_source_delete';
                $crudRoutePart = 'leads-sources';

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
            $table->editColumn('source_name', function ($row) {
                return $row->source_name ? $row->source_name : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.leadsSources.index');
    }

    public function create()
    {
        abort_if(Gate::denies('leads_source_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leadsSources.create');
    }

    public function store(StoreLeadsSourceRequest $request)
    {
        $leadsSource = LeadsSource::create($request->all());

        return redirect()->route('admin.leads-sources.index');
    }

    public function edit(LeadsSource $leadsSource)
    {
        abort_if(Gate::denies('leads_source_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leadsSources.edit', compact('leadsSource'));
    }

    public function update(UpdateLeadsSourceRequest $request, LeadsSource $leadsSource)
    {
        $leadsSource->update($request->all());

        return redirect()->route('admin.leads-sources.index');
    }

    public function show(LeadsSource $leadsSource)
    {
        abort_if(Gate::denies('leads_source_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.leadsSources.show', compact('leadsSource'));
    }

    public function destroy(LeadsSource $leadsSource)
    {
        abort_if(Gate::denies('leads_source_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $leadsSource->delete();

        return back();
    }

    public function massDestroy(MassDestroyLeadsSourceRequest $request)
    {
        LeadsSource::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEstimateRequest;
use App\Http\Requests\StoreEstimateRequest;
use App\Http\Requests\UpdateEstimateRequest;
use App\Models\Estimate;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class EstimatesController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('estimate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Estimate::query()->select(sprintf('%s.*', (new Estimate())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'estimate_show';
                $editGate = 'estimate_edit';
                $deleteGate = 'estimate_delete';
                $crudRoutePart = 'estimates';

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
            $table->editColumn('est_stat', function ($row) {
                return $row->est_stat ? $row->est_stat : '';
            });
            $table->editColumn('est_state', function ($row) {
                return $row->est_state ? Estimate::EST_STATE_SELECT[$row->est_state] : '';
            });
            $table->editColumn('est_county', function ($row) {
                return $row->est_county ? Estimate::EST_COUNTY_SELECT[$row->est_county] : '';
            });
            $table->editColumn('est_total_before_tax', function ($row) {
                return $row->est_total_before_tax ? $row->est_total_before_tax : '';
            });
            $table->editColumn('est_state_tax', function ($row) {
                return $row->est_state_tax ? $row->est_state_tax : '';
            });
            $table->editColumn('est_county_tax', function ($row) {
                return $row->est_county_tax ? $row->est_county_tax : '';
            });
            $table->editColumn('est_total_after_tax', function ($row) {
                return $row->est_total_after_tax ? $row->est_total_after_tax : '';
            });
            $table->editColumn('dep_calc_1', function ($row) {
                return $row->dep_calc_1 ? $row->dep_calc_1 : '';
            });
            $table->editColumn('dep_calc_2', function ($row) {
                return $row->dep_calc_2 ? $row->dep_calc_2 : '';
            });
            $table->editColumn('dep_calc_3', function ($row) {
                return $row->dep_calc_3 ? $row->dep_calc_3 : '';
            });
            $table->editColumn('est_desposit_1', function ($row) {
                return $row->est_desposit_1 ? $row->est_desposit_1 : '';
            });
            $table->editColumn('est_desposit_2', function ($row) {
                return $row->est_desposit_2 ? $row->est_desposit_2 : '';
            });
            $table->editColumn('est_deposit_3', function ($row) {
                return $row->est_deposit_3 ? $row->est_deposit_3 : '';
            });
            $table->editColumn('est_view_price', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->est_view_price ? 'checked' : null) . '>';
            });
            $table->editColumn('est_view_qty', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->est_view_qty ? 'checked' : null) . '>';
            });
            $table->editColumn('est_view_detail', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->est_view_detail ? 'checked' : null) . '>';
            });
            $table->editColumn('est_access', function ($row) {
                return $row->est_access ? $row->est_access : '';
            });
            $table->editColumn('est_cust_email_signed', function ($row) {
                return $row->est_cust_email_signed ? $row->est_cust_email_signed : '';
            });
            $table->editColumn('est_cust_first_signed', function ($row) {
                return $row->est_cust_first_signed ? $row->est_cust_first_signed : '';
            });
            $table->editColumn('est_cust_last_signed', function ($row) {
                return $row->est_cust_last_signed ? $row->est_cust_last_signed : '';
            });
            $table->editColumn('est_sign', function ($row) {
                return $row->est_sign ? $row->est_sign : '';
            });
            $table->editColumn('est_sign_int', function ($row) {
                return $row->est_sign_int ? $row->est_sign_int : '';
            });
            $table->editColumn('est_approve_date', function ($row) {
                return $row->est_approve_date ? $row->est_approve_date : '';
            });
            $table->editColumn('est_user_ip', function ($row) {
                return $row->est_user_ip ? $row->est_user_ip : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'est_view_price', 'est_view_qty', 'est_view_detail']);

            return $table->make(true);
        }

        return view('admin.estimates.index');
    }

    public function create()
    {
        abort_if(Gate::denies('estimate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.estimates.create');
    }

    public function store(StoreEstimateRequest $request)
    {
        $estimate = Estimate::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $estimate->id]);
        }

        return redirect()->route('admin.estimates.index');
    }

    public function edit(Estimate $estimate)
    {
        abort_if(Gate::denies('estimate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.estimates.edit', compact('estimate'));
    }

    public function update(UpdateEstimateRequest $request, Estimate $estimate)
    {
        $estimate->update($request->all());

        return redirect()->route('admin.estimates.index');
    }

    public function show(Estimate $estimate)
    {
        abort_if(Gate::denies('estimate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.estimates.show', compact('estimate'));
    }

    public function destroy(Estimate $estimate)
    {
        abort_if(Gate::denies('estimate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $estimate->delete();

        return back();
    }

    public function massDestroy(MassDestroyEstimateRequest $request)
    {
        Estimate::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('estimate_create') && Gate::denies('estimate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Estimate();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

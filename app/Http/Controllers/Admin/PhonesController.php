<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyPhoneRequest;
use App\Http\Requests\StorePhoneRequest;
use App\Http\Requests\UpdatePhoneRequest;
use App\Models\Phone;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PhonesController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('phone_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Phone::query()->select(sprintf('%s.*', (new Phone())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'phone_show';
                $editGate = 'phone_edit';
                $deleteGate = 'phone_delete';
                $crudRoutePart = 'phones';

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
            $table->editColumn('ms_phone_type_name', function ($row) {
                return $row->ms_phone_type_name ? $row->ms_phone_type_name : '';
            });
            $table->editColumn('primary_phone_type', function ($row) {
                return $row->primary_phone_type ? Phone::PRIMARY_PHONE_TYPE_SELECT[$row->primary_phone_type] : '';
            });
            $table->editColumn('primary_phone', function ($row) {
                return $row->primary_phone ? $row->primary_phone : '';
            });
            $table->editColumn('phone_contact', function ($row) {
                return $row->phone_contact ? $row->phone_contact : '';
            });
            $table->editColumn('primary_ext', function ($row) {
                return $row->primary_ext ? $row->primary_ext : '';
            });
            $table->editColumn('primary_dnc', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->primary_dnc ? 'checked' : null) . '>';
            });
            $table->editColumn('primary_dnt', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->primary_dnt ? 'checked' : null) . '>';
            });
            $table->editColumn('phone', function ($row) {
                return $row->phone ? $row->phone : '';
            });
            $table->editColumn('ms_access_company', function ($row) {
                return $row->ms_access_company ? $row->ms_access_company : '';
            });
            $table->editColumn('ms_phone_type', function ($row) {
                return $row->ms_phone_type ? $row->ms_phone_type : '';
            });
            $table->editColumn('ms_phone_cty_code', function ($row) {
                return $row->ms_phone_cty_code ? $row->ms_phone_cty_code : '';
            });
            $table->editColumn('ms_phone_area_code', function ($row) {
                return $row->ms_phone_area_code ? $row->ms_phone_area_code : '';
            });
            $table->editColumn('ms_phone_number', function ($row) {
                return $row->ms_phone_number ? $row->ms_phone_number : '';
            });
            $table->editColumn('ms_primary_phone_type', function ($row) {
                return $row->ms_primary_phone_type ? $row->ms_primary_phone_type : '';
            });
            $table->editColumn('ms_phone_dnc', function ($row) {
                return $row->ms_phone_dnc ? $row->ms_phone_dnc : '';
            });
            $table->editColumn('ms_phone_fed_do_not_call', function ($row) {
                return $row->ms_phone_fed_do_not_call ? $row->ms_phone_fed_do_not_call : '';
            });
            $table->editColumn('ms_phone_state_do_not_call', function ($row) {
                return $row->ms_phone_state_do_not_call ? $row->ms_phone_state_do_not_call : '';
            });
            $table->editColumn('ms_written_permission_dnc', function ($row) {
                return $row->ms_written_permission_dnc ? $row->ms_written_permission_dnc : '';
            });

            $table->editColumn('ms_phone_dnc_exempt', function ($row) {
                return $row->ms_phone_dnc_exempt ? $row->ms_phone_dnc_exempt : '';
            });
            $table->editColumn('ms_phone_house_do_not_call', function ($row) {
                return $row->ms_phone_house_do_not_call ? $row->ms_phone_house_do_not_call : '';
            });
            $table->editColumn('ms_phone_description', function ($row) {
                return $row->ms_phone_description ? $row->ms_phone_description : '';
            });
            $table->editColumn('ms_phone_ext', function ($row) {
                return $row->ms_phone_ext ? $row->ms_phone_ext : '';
            });
            $table->editColumn('ms_phone_do_not_fax', function ($row) {
                return $row->ms_phone_do_not_fax ? $row->ms_phone_do_not_fax : '';
            });
            $table->editColumn('ms_is_active', function ($row) {
                return $row->ms_is_active ? $row->ms_is_active : '';
            });
            $table->editColumn('last_updateby_user', function ($row) {
                return $row->last_updateby_user ? $row->last_updateby_user : '';
            });
            $table->editColumn('ms_last_update', function ($row) {
                return $row->ms_last_update ? $row->ms_last_update : '';
            });
            $table->editColumn('ms_phonenumbersearch', function ($row) {
                return $row->ms_phonenumbersearch ? $row->ms_phonenumbersearch : '';
            });
            $table->editColumn('ms_phonenumberexcludingareacodesearch', function ($row) {
                return $row->ms_phonenumberexcludingareacodesearch ? $row->ms_phonenumberexcludingareacodesearch : '';
            });
            $table->editColumn('ms_phone_dnt', function ($row) {
                return $row->ms_phone_dnt ? $row->ms_phone_dnt : '';
            });
            $table->editColumn('ms_phone_dnt_texting_opt_out', function ($row) {
                return $row->ms_phone_dnt_texting_opt_out ? $row->ms_phone_dnt_texting_opt_out : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'primary_dnc', 'primary_dnt']);

            return $table->make(true);
        }

        return view('admin.phones.index');
    }

    public function create()
    {
        abort_if(Gate::denies('phone_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.phones.create');
    }

    public function store(StorePhoneRequest $request)
    {
        $phone = Phone::create($request->all());

        return redirect()->route('admin.phones.index');
    }

    public function edit(Phone $phone)
    {
        abort_if(Gate::denies('phone_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.phones.edit', compact('phone'));
    }

    public function update(UpdatePhoneRequest $request, Phone $phone)
    {
        $phone->update($request->all());

        return redirect()->route('admin.phones.index');
    }

    public function show(Phone $phone)
    {
        abort_if(Gate::denies('phone_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.phones.show', compact('phone'));
    }

    public function destroy(Phone $phone)
    {
        abort_if(Gate::denies('phone_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $phone->delete();

        return back();
    }

    public function massDestroy(MassDestroyPhoneRequest $request)
    {
        Phone::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

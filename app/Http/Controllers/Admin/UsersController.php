<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class UsersController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = User::with(['roles', 'last_updated_by'])->select(sprintf('%s.*', (new User())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'user_show';
                $editGate = 'user_edit';
                $deleteGate = 'user_delete';
                $crudRoutePart = 'users';

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
            $table->editColumn('ms_user', function ($row) {
                return $row->ms_user ? $row->ms_user : '';
            });
            $table->editColumn('first_name', function ($row) {
                return $row->first_name ? $row->first_name : '';
            });
            $table->editColumn('last_name', function ($row) {
                return $row->last_name ? $row->last_name : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->editColumn('user_company', function ($row) {
                return $row->user_company ? $row->user_company : '';
            });
            $table->editColumn('user_status', function ($row) {
                return $row->user_status ? $row->user_status : '';
            });
            $table->editColumn('user_role', function ($row) {
                return $row->user_role ? $row->user_role : '';
            });
            $table->editColumn('user_dept', function ($row) {
                return $row->user_dept ? $row->user_dept : '';
            });
            $table->editColumn('user_title', function ($row) {
                return $row->user_title ? $row->user_title : '';
            });
            $table->editColumn('address', function ($row) {
                return $row->address ? $row->address : '';
            });
            $table->editColumn('user_profile_img', function ($row) {
                if ($photo = $row->user_profile_img) {
                    return sprintf(
        '<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>',
        $photo->url,
        $photo->thumbnail
    );
                }

                return '';
            });
            $table->editColumn('user_color', function ($row) {
                return $row->user_color ? $row->user_color : '';
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : '';
            });
            $table->editColumn('goog_pw', function ($row) {
                return $row->goog_pw ? $row->goog_pw : '';
            });

            $table->editColumn('two_factor', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->two_factor ? 'checked' : null) . '>';
            });
            $table->editColumn('mobile', function ($row) {
                return $row->mobile ? $row->mobile : '';
            });
            $table->editColumn('roles', function ($row) {
                $labels = [];
                foreach ($row->roles as $role) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $role->title);
                }

                return implode(' ', $labels);
            });
            $table->editColumn('ticketit_admin', function ($row) {
                return $row->ticketit_admin ? $row->ticketit_admin : '';
            });
            $table->editColumn('ticketit_agent', function ($row) {
                return $row->ticketit_agent ? $row->ticketit_agent : '';
            });
            $table->addColumn('last_updated_by_name', function ($row) {
                return $row->last_updated_by ? $row->last_updated_by->name : '';
            });

            $table->editColumn('ms_is_active', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->ms_is_active ? 'checked' : null) . '>';
            });

            $table->rawColumns(['actions', 'placeholder', 'user_profile_img', 'two_factor', 'roles', 'last_updated_by', 'ms_is_active']);

            return $table->make(true);
        }

        $roles = Role::get();
        $users = User::get();

        return view('admin.users.index', compact('roles', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('title', 'id');

        $last_updated_bies = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.users.create', compact('roles', 'last_updated_bies'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));
        if ($request->input('user_profile_img', false)) {
            $user->addMedia(storage_path('tmp/uploads/' . basename($request->input('user_profile_img'))))->toMediaCollection('user_profile_img');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $user->id]);
        }

        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::pluck('title', 'id');

        $last_updated_bies = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $user->load('roles', 'last_updated_by');

        return view('admin.users.edit', compact('roles', 'last_updated_bies', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));
        if ($request->input('user_profile_img', false)) {
            if (!$user->user_profile_img || $request->input('user_profile_img') !== $user->user_profile_img->file_name) {
                if ($user->user_profile_img) {
                    $user->user_profile_img->delete();
                }
                $user->addMedia(storage_path('tmp/uploads/' . basename($request->input('user_profile_img'))))->toMediaCollection('user_profile_img');
            }
        } elseif ($user->user_profile_img) {
            $user->user_profile_img->delete();
        }

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles', 'last_updated_by');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('user_create') && Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new User();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

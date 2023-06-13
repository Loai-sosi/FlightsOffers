<?php

namespace App\Http\Controllers\Api\V1;


use App\Filters\ParentFilter;
use App\Http\Requests\Admin\StoreAdminRequest;
use App\Http\Resources\Api\V1\AdminResource;
use App\Models\TAdmin;

class AdminController extends ApiBaseController
{
    public function show(TAdmin $admin)
    {
        return $this->successResponse('', new AdminResource($admin), 'admin');
    }

    public function index(ParentFilter $filter)
    {
        $admins = TAdmin::filter($filter)->paginate();
        return $this->successResponse('', AdminResource::collection($admins), 'admins');
    }

    public function store(StoreAdminRequest $request)
    {

        $input = $request->except('confirm_password', 'user_pwd','oid');
        $s_password = $request->get('user_pwd');

        if ($s_password) {
            $input['user_pwd'] = $s_password;
        }

        if ($request->hasFile('s_avatar')) {
            $input['s_avatar'] = $request->file('s_avatar')->store('uploads/avatars');
        }


        if ($id = $request->get('oid')) {
            $admin = TAdmin::find($id);
            $admin->update($input);
        } else {
            $admin = TAdmin::create($input);
        }

//        $admin->syncRoles($input['fk_i_role_id']);

        return response()->json([
            'success' => true,
            'message' => trans('alerts.successfully_added'),
            'data' => $admin
        ]);
    }

    public function destroy()
    {
        $user = auth()->user();
        $user->delete();
        return $this->successResponse(trans('alerts.successfully_deleted'));
    }

}

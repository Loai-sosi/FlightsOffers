<?php

namespace App\Http\Controllers\Api\V1;


use App\Filters\ParentFilter;
use App\Http\Resources\Api\V1\UserResource;
use App\Models\TUser;

class UserController extends ApiBaseController
{
    public function show(TUser $user)
    {
        return $this->successResponse('', new UserResource($user), 'user');
    }

    public function index(ParentFilter $filter)
    {
        $users = TUser::filter($filter)->enabled()->paginate();
        return $this->successResponse('', UserResource::collection($users), 'users');
    }

    public function destroy()
    {
        $user = auth()->user();
        $user->delete();
        return $this->successResponse(trans('alerts.successfully_deleted'));
    }

}

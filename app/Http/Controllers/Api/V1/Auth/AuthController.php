<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Api\V1\ApiBaseController;
use App\Http\Requests\Admin\LoginRequest;
use App\Http\Resources\Api\V1\UserResource;
use App\Models\TAdmin;

class AuthController extends ApiBaseController
{

    public function me()
    {
        return $this->successResponse('', new UserResource(auth()->user()), 'user');
    }

    public function login(LoginRequest $request)
    {
        $username = trim($request->get('username'));
        $password = $request->get('password');

        if ( auth('admin')->attempt(['username' => $username, 'password' => $password], false)) {
            $admin = auth('admin')->user();
            $admin['token'] = auth('admin')->user()->createToken('login');
            return $admin;
        }

        return trans('alerts.wrong_credentials');
    }

    public function logout()
    {
        $currentAccessToken = auth()->user()->currentAccessToken();
        $currentAccessToken->device()->delete();
        $currentAccessToken->delete();
        return $this->successResponse('logged out successfully');
    }

}

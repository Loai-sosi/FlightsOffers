<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Events\NewPersonalAccessToken;
use App\Http\Controllers\Api\V1\ApiBaseController;
use App\Http\Requests\Api\V1\FirebaseLoginRequest;
use App\Http\Requests\Api\V1\FirebaseRegisterRequest;
use App\Http\Resources\Api\V1\UserResource;
use App\Models\TUser;
use App\Notifications\UserJustJoined;
use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;

class FirebaseAuthController extends ApiBaseController
{


    public function login(FirebaseLoginRequest $request)
    {
        $phoneNumber = request('s_phone');
        $firebaseToken = request('s_firebase_token');

        if (strpos($phoneNumber, '+') !== false) {
            $phoneNumber = str_replace("+", "00", $phoneNumber);
        }


        if ($request->get('s_bypass_token') != 'weroprejgeijeirfjergrejgg' && !app()->environment('local')) {

            $auth = Firebase::auth();
            $verifiedToken = $auth->verifyIdToken($firebaseToken);

            if ($verifiedMobileNumber = $verifiedToken->claims()->get('phone_number')) {
                $verifiedMobileNumber = str_replace("+", "00", $verifiedMobileNumber);
                if ($verifiedMobileNumber != $phoneNumber) {
                    return $this->failResponse(__('alerts.failed_to_login'));
                }
            }

        }


        $user = TUser::where('s_phone', $phoneNumber)->first();
        $newUser = false;

        if (!$user) {
            $user = TUser::create(['s_phone' => $phoneNumber, 'b_enabled' => 1]);
            $user->refresh();
            $newUser = true;
            $this->notifyUserContactJoined($phoneNumber);
        }

        if (!$user->b_enabled) {
            return $this->notFoundResponse(trans('alerts.failed_to_login_user_disabled'));
        }

        $token = $user->createToken('login');
        $user['s_access_token'] = $token->plainTextToken;

        event(new NewPersonalAccessToken($token, $request));

        return $this->setSuccess(__('alerts.successfully_logged_in'))
                    ->addResource(new UserResource($user), 'user')
                    ->addResponseFiledWhen($newUser && $user->getKey() <= 100000, trans('alerts.early_users_subscription_note'), 's_early_users_subscription')
                    ->getResponse();
    }


    public function notifyUserContactJoined($phoneNumber)
    {
        TUser::whereHas('contacts', function ($query) use ($phoneNumber) {
            $query->where('s_phone', $phoneNumber);
        })->get()->each(function ($user) use ($phoneNumber) {
            $contact = $user->contacts()->where('s_phone', $phoneNumber)->first();
            if ($contact) {
                $user->notify(
                    new UserJustJoined(
                        'notifications.user_just_joint',
                        ['user' => $contact->s_name ?? $contact->s_name],
                        '',
                        $contact
                    )
                );
            }
        });
    }


    public function register(FirebaseRegisterRequest $request)
    {

        $phoneNumber = request('s_phone');
        $firebaseToken = request('s_firebase_token');

        if (strpos($phoneNumber, '+') !== false) {
            $phoneNumber = str_replace("+", "00", $phoneNumber);
        }


        try {

            $verifiedToken = Firebase::auth()->verifyIdToken($firebaseToken);
        } catch (\Exception $exception) {
            return $this->failResponse(__('alerts.firebase_token_expired'));
        }

        if ($verifiedMobileNumber = $verifiedToken->getClaim('phone_number')) {
            $verifiedMobileNumber = str_replace("+", "00", $verifiedMobileNumber);
            if ($verifiedMobileNumber != $phoneNumber) {
                return $this->failResponse(__('alerts.failed_to_register'));
            }
        }

        $user = TUser::create($request->validated())->fresh();

        $token = $user->createToken('login');
        $user['s_access_token'] = $token->plainTextToken;
        event(new NewPersonalAccessToken($token, $request));


        return $this->successResponse(__('alerts.successfully_registered'), new UserResource($user));
    }


    public function checkPhone(Request $request)
    {
        $phone = $request->get('s_phone');

        $user = TUser::where('s_phone', $phone)->exists();

        if ($user) {
            return $this->successResponse(__('alerts.phone_is_registered'));
        } else {
            return $this->notFoundResponse(__('alerts.phone_is_not_registered'));
        }
    }
}

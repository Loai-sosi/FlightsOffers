<?php

namespace App\Http\Controllers;

use App\Filters\Api\NotificationFilter;
use App\Http\Controllers\Api\V1\ApiBaseController;
use App\Http\Requests\NotificationSettingsRequest;
use App\Http\Resources\Api\V1\NotificationResource;
use App\Http\Resources\Api\V1\UserResource;
use App\Models\TReservation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NotificationController extends ApiBaseController
{

    public function index(NotificationFilter $filter)
    {
        $notificationBuilder = auth()->user()->notifications();

        if (request()->get('b_just_read', 0)) {
            $notificationCount = $notificationBuilder->newQuery()->whereNull('dt_seen_date')->count();
            return $this->setSuccess()
                ->addResponseField('i_unread_notifications', $notificationCount)
                ->getResponse();
        }

        $notifications = $notificationBuilder->with('sender')->filter($filter)->paginate();
        $notificationBuilder->update(['dt_seen_date' => Carbon::now()]);


        return $this->setSuccess()
            ->addResource(NotificationResource::collection($notifications), 'notifications')
            ->getResponse();
    }


    public function count(Request $request)
    {

        $userNotifications = auth()->user()->notifications()->whereNull('dt_seen_date');
        $count = $userNotifications->count();

        return $this->setSuccess("")
            ->addResponseField('count', $count)
            ->getResponse();
    }


    public function settings(NotificationSettingsRequest $request)
    {
        auth()->user()->forceFill(
            $request->only([
                'b_enable_notification',
                'b_enable_complete_voice',
                'b_enable_reminder',
                'b_enable_comments'
            ]))->save();

        return $this->successResponse(trans('alerts.successfully_updated'), new UserResource(auth()->user()), 'user');
    }
}

<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request)
    {

//        "pk_i_id": 1,
//        "s_name": "Ahmed Manasra",
//        "s_bio": "lorem ipsum",
//        "s_avatar": "https://via.placeholder.com/150",
//        "s_site": "https://example.com",
//        "s_phone": "00966597240962",
//        "s_email": "amanasra96@gmail.com",
//        "s_access_token": "Bearer 697|5YHd09SDzSoEwsv6796dhaJvgNGKA553K3YGVmgW",
//        "b_completed": true,
//        "b_enabled": true,
//        "dt_created_date": "2022-10-25 06:42:53",
//        "dt_modified_date": "2022-10-25 06:42:53",
//        "dt_deleted_date": null



        return [
            'pk_i_id' => $this->getKey(),
            's_name' => $this->s_name,
            's_bio' => $this->s_bio,
            'fk_i_avatar_id' => $this->fk_i_avatar_id,
            's_avatar' => !is_null($this->s_avatar)? asset($this->s_avatar):($this->avatar ? asset($this->avatar->s_extra) :''),
            's_site' => $this->s_site,
            's_phone' => $this->s_phone,
            's_email' => $this->s_email,
            'b_enabled' => (bool)$this->b_enabled,
            'fk_i_user_id' => $this->getKey(),
            's_report_url' => config('app.site_url')."/reports/member/". $this->getKey()."?lang=".app()->getLocale(),
            $this->mergeWhen($this->s_access_token, function () {
                return [
                    's_access_token' => 'Bearer ' . $this->s_access_token,
                ];
            }),
            $this->mergeWhen(
                $this->currentSubscription && $this->currentSubscription->plan,
                function () {
                    $plan = $this->currentSubscription->plan;
                    return [
                        'plan' => new PlanResource($this->currentSubscription->plan),
                        'fk_i_plan_id' => $plan->getKey(),
                        'e_plan_type' => $plan->e_type,
                        'dt_expiry_date' => $this->currentSubscription->dt_expiry_date
                    ];
                }
            ),
            'b_enable_notification' => (boolean) $this->b_enable_notification,
            'b_enable_complete_voice' => (boolean) $this->b_enable_complete_voice,
            'b_enable_reminder' => (boolean) $this->b_enable_reminder,
            'b_enable_comments' => (boolean) $this->b_enable_comments,
            'b_completed' => !empty($this->s_name),
            'dt_created_date' => $this->dt_created_date ?->toDateTimeString(),
            'dt_modified_date' => $this->dt_modified_date ?->toDateTimeString(),
            'dt_deleted_date' => $this->dt_deleted_date ?->toDateTimeString(),
        ];
    }
}

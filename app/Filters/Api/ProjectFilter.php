<?php


namespace App\Filters\Api;

use App\Constants\TaskStatusType;
use App\Filters\ParentFilter;
use Carbon\Carbon;

class ProjectFilter extends ParentFilter
{
    public function s_name($name = null)
    {
        $this->builder->when($name, function ($query) use ($name) {
            $query->where('s_name' , 'like', '%' . $name . '%');
        });
    }

    public function e_status($status = null)
    {
        $this->builder->when($status, function ($query) use ($status) {
            $query->where('e_status', $status);
        });
    }


    public function b_end_soon($b_end_soon = 0)
    {
        $this->builder->when($b_end_soon, function ($query) {
            $query->whereHas('tasks', function ($q){
                $q->where('e_status',TaskStatusType::DONE)
                ->orWhere(function ($q1){
                    $q1->where('e_status',TaskStatusType::IN_PROGRESS)
                        ->where('dt_end_date','<=',Carbon::now()->addHours(24)->format("Y-m-d H:i:s"));
                });
            });
        });
    }

    public function b_favorited($favorited = null)
    {
        $this->builder->when($favorited, function ($builder) use ($favorited) {
            $builder->whereHas('favorites', function ($query) use ($favorited) {
                $query->where('fk_i_user_id', auth()->id());
            });
        });
    }

    public function i_user_id($user = null)
    {
        $this->builder->when($user, function ($query) use ($user) {
            $query->where('fk_i_user_id', $user);
        });
    }
}

<?php


namespace App\Filters\Api;

use App\Constants\TaskStatusType;
use App\Filters\ParentFilter;
use App\Models\TTask;
use Carbon\Carbon;

class MembersFilter extends ParentFilter
{
    public function b_in_common_team($b_in_common_team = null)
    {
        $usersIds = [];
        $tasks = TTask::with('team')->where(function ($query){
            $query->where(function ($q) {
                $q->whereHas('team', function ($query) {
                    $query->where('fk_i_user_id', auth()->id());
                })
                    ->orWhere('fk_i_leader_id', auth()->id())
                    ->orWhere('fk_i_creator_id', auth()->id());
            });
        })->get();

        foreach($tasks as $task){
            $usersIds[] = $task->fk_i_leader_id;
            $usersIds[] = $task->fk_i_creator_id;
            $usersIds = array_merge($usersIds,$task->team->pluck('pk_i_id')->toArray());
        }

        $usersIds= array_unique($usersIds);
        $this->builder->when($b_in_common_team, function ($builder) use($usersIds) {
            $builder->whereIn('pk_i_id', $usersIds);
        });
    }
}

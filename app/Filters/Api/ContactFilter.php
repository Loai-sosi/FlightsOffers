<?php


namespace App\Filters\Api;

use App\Models\TTask;
use App\QueryFilters;

class ContactFilter extends QueryFilters
{
    public function s_name($name = '')
    {
        $this->builder->when($name, function ($query) use ($name) {
            $query->where('t_synced_contacts.s_name', 'like', '%' . $name . '%')
                ->orWhere('t_synced_contacts.s_phone', 'like', '%' . $name . '%');
        });
    }


    public function b_registered($registered = '')
    {
        $this->builder->when(strlen($registered), function ($query) use ($registered) {
            if ($registered) {
                $query->whereNotNull('t_users.pk_i_id');
            } else {
                $query->whereNull('t_users.pk_i_id');
            }
        });
    }


    public function has_common_tasks($has_common_tasks = '')
    {
        $this->builder->when($has_common_tasks == 1, function ($builder) {
            $usersIds = [];
            $tasks = TTask::with('team')->myTask()->get();

            foreach($tasks as $task){
                $usersIds[] = $task->fk_i_leader_id;
                $usersIds[] = $task->fk_i_creator_id;
                $usersIds = array_merge($usersIds,$task->team->pluck('pk_i_id')->toArray());
            }

            $usersIds= array_filter(array_unique($usersIds),function ($item){
                return $item != Null;
            });
           // dd($usersIds);
            $builder->join('t_users as common', function ($join)use($usersIds) {
                $join->on('common.s_phone', '=', 't_synced_contacts.s_phone')
                    ->whereIn('common.pk_i_id', $usersIds);});
        });
    }
}

<?php

namespace App\Filters;


class GroupFilter extends ParentFilter
{

    public function user($parent = null)
    {
        $this->builder->when(strlen($parent), function ($query) use ($parent) {
            $query->where('t_groups.fk_i_user_id', $parent);
        });
    }


}

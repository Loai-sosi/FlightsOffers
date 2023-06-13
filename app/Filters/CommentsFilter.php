<?php

namespace App\Filters;


class CommentsFilter extends ParentFilter
{
    public function i_parent_id($parent = '')
    {
        $this->builder->when($parent, function ($query) use ($parent) {
            $query->where('fk_i_parent_id', $parent);
        });
    }
}

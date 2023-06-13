<?php

namespace App\Filters;


class TagsFilters extends ParentFilter
{

    public function parent($parent = null)
    {
        $this->builder->when(strlen($parent), function ($query) use ($parent) {
            $query->where('fk_i_parent_id', $parent);
        });
    }
}

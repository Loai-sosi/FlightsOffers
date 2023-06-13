<?php


namespace App\Filters\Api;

use App\Filters\ParentFilter;

class ConstantFilter extends ParentFilter
{
    public function s_key($key = null)
    {
        $this->builder->when($key, function ($query) use ($key) {
            $query->where('s_key', $key);
        });
    }


    public function i_parent_id($parentId = null)
    {
        $this->builder->when($parentId, function ($query) use ($parentId) {
            $query->where('fk_i_parent_id', $parentId);
        });
    }
}

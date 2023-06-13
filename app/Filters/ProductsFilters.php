<?php

namespace App\Filters;


class ProductsFilters extends ParentFilter
{

    public function user($parent = null)
    {
        $this->builder->when(strlen($parent), function ($query) use ($parent) {
            $query->where('t_reservations.fk_i_user_id', $parent);
        });
    }

    public function status($parent = null)
    {
        $this->builder->when(strlen($parent), function ($query) use ($parent) {
            $query->where('t_reservations.e_status', $parent);
        });
    }


}

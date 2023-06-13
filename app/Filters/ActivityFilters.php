<?php

namespace App\Filters;


class ActivityFilters extends ParentFilter
{

    public function user($parent = null)
    {
        $this->builder->when(strlen($parent), function ($query) use ($parent) {
            $query->where('t_activities.fk_i_user_id', $parent);
        });
    }

    public function dt_from_date($startDate = null)
    {
        if ($startDate) {
            $startDate = request()->get('dt_from_date') . ' 00:00:00';
            return $this->builder->where('dt_created_date', '>=', $startDate);
        }

        return $this->builder;
    }

    public function dt_to_date($endDate = null)
    {
        if ($endDate) {
            $endDate = request()->get('dt_to_date') . ' 23:59:59';
            return $this->builder->where('dt_created_date', '<=', $endDate);
        }

        return $this->builder;
    }


}

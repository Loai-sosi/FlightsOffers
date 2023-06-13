<?php

namespace App\Filters\Api;

use App\Constants\TaskStatusType;
use App\Filters\ParentFilter;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TaskFilter extends ParentFilter
{

    public function i_project_id($i_project_id = null)
    {
        $this->builder->when($i_project_id, function ($builder) use ($i_project_id) {
            $builder->where('fk_i_project_id', $i_project_id);
        });
    }

    public function b_not_related_to_project($b_not_related_to_project = null)
    {
        $this->builder->when($b_not_related_to_project, function ($builder) {
            $builder->whereNull('fk_i_project_id');
        });
    }


    public function i_category_id($i_category_id)
    {
        $this->builder->when($i_category_id, function ($builder) use ($i_category_id) {
            $builder->where('fk_i_category_id', $i_category_id);
        });
    }


    public function s_name($s_name = null)
    {
        $this->builder->when($s_name, function ($builder) use ($s_name) {
            $builder->where('s_name', 'LIKE', '%' . $s_name . '%');
        });
    }


    public function e_status($e_status = null)
    {
        $this->builder->when($e_status, function ($builder) use ($e_status) {
            $builder->where('e_status', $e_status);
        });
    }


    public function i_user_id($user_id = null)
    {
        $this->builder->when($user_id, function ($builder) use ($user_id) {
            $builder->where('fk_i_creator_id', $user_id);
        });

    }


    // get in common tasks
    public function i_incommon_id($user_id = null)
    {
        $this->builder->when($user_id, function ($builder) use ($user_id) {
            $builder->where(function ($q)use($user_id) {
                    $q->whereHas('team', function ($query)use($user_id) {
                        $query->where('fk_i_user_id', $user_id);
                    })
                        ->orWhere('fk_i_leader_id', $user_id)
                        ->orWhere('fk_i_creator_id', $user_id);
                });
        });

    }


    public function dt_date($date = null)
    {
        return $this->builder->when($date, function ($builder) use ($date) {
            return $builder->where(function ($query) use ($date) {
                $date1 = Carbon::parse($date)->startOfDay();
                return $query->whereRaw('? >= t_tasks.dt_start_date and ? <= t_tasks.dt_end_date ', [$date1,$date1]);
            });
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

    public function b_end_soon($b_end_soon = 0)
    {
        $this->builder->when($b_end_soon, function ($query) {
            $query->where(function ($q1){
                        $q1->where('e_status',TaskStatusType::IN_PROGRESS)
                            ->whereNotNull('dt_end_date')
                            ->where('dt_end_date','<=',Carbon::now()->addHours(48)->format("Y-m-d H:i:s"));
                    });
            });
    }

    //b_team_participant:1


    public function b_team_participant($b_team_participant = null)
    {
        $this->builder->when($b_team_participant, function ($builder) use ($b_team_participant) {
            $builder->whereHas('team', function ($query) {
                $query->where('fk_i_user_id', auth()->id());
            });
        });


    }


    public function sort_by($sort_by = null)
    {
//        IMPORTANCE || ALPHABATIC || DATE || CREATED_AT

        if ($sort_by == 'IMPORTANCE') {
            $this->builder->orderby(DB::raw('case when e_priority="URGENT" then 1 when e_priority= "IMPORTANT_NOT_URGENT" then 2 when e_priority= "NOT_IMPORTANT_BUT_URGENT" then 3 when e_priority= "NOT_IMPORTANT_OR_NOT_URGENT" then 4 when e_priority= "NONE" then 5 end'), 'asc');
        } elseif ($sort_by == "ALPHABATIC") {
            $this->builder->orderby('s_name', 'asc');
        } elseif ($sort_by == "DATE") {
            $this->builder->orderby('dt_start_date', 'asc');
        } else {
            $this->builder->orderby('dt_created_date', 'desc');
        }
        return $this->builder;
    }


    public function b_favorited($favorited = null)
    {
        $this->builder->when($favorited, function ($builder) use ($favorited) {
            $builder->whereHas('favorites', function ($query) use ($favorited) {
                $query->where('fk_i_user_id', auth()->id());
            });
        });
    }


    public function b_assigned_to_me($value = 1)
    {
        $this->builder->when($value, function ($builder) {
            $builder->where('fk_i_leader_id', auth()->id());
        });
    }

}

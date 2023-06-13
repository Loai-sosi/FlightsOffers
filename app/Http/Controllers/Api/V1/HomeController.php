<?php

namespace App\Http\Controllers\Api\V1;

use App\Constants\TaskStatusType;
use App\Filters\Api\TaskFilter;
use App\Http\Requests\Api\V1\StoreTaskRequest;
use App\Http\Resources\Api\V1\ShortUserResource;
use App\Http\Resources\Api\V1\StepResource;
use App\Http\Resources\Api\V1\SubscriptionResource;
use App\Http\Resources\Api\V1\TaskResource;
use App\Models\TProject;
use App\Models\TStep;
use App\Models\TTask;
use App\Models\TUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\UnauthorizedException;

class HomeController extends ApiBaseController
{
    public function index()
    {
        $tasks = TTask::with('team', 'creator')->myTask();

        $tasksCount = $tasks->count();

        $tasks1 = clone $tasks;
        $tasks2 = clone $tasks;
        $tasks3 = clone $tasks;

        $inProgressTask = $tasks1->where('e_status', 'IN_PROGRESS')
            ->where(function ($q){
                $q->whereNull(  'dt_end_date')
                    ->orWhere('dt_end_date',">=",date('Y-m-d'));
            })->count();
        $stuckTasks = $tasks2->where('e_status', 'IN_PROGRESS')
            ->where('dt_end_date',"<",date('Y-m-d'))
            ->count();
        $doneTasks = $tasks3->where('e_status', 'DONE')->count();

        $now = now();
        $weekStartDate = $now->copy()->startOfWeek()->format('Y-m-d');
        $weekEndDate = $now->copy()->endOfWeek()->format('Y-m-d');


        $array = array();
        $interval = new \DateInterval('P1D');

        $realEnd = new \DateTime($weekEndDate);
        $realEnd->add($interval);

        $period = new \DatePeriod(new \DateTime($weekStartDate), $interval, $realEnd);

        foreach ($period as $date) {
            $tasksOfDay = clone $tasks;
            $array[strtolower($date->format('l'))] = $tasksOfDay->where('dt_complete_date', $date->format('Y-m-d'))
                ->where('e_status', 'DONE')->count();
        }

        $taskStatistics = [
            'i_total_tasks' => $tasksCount,
            'i_done_tasks' => $doneTasks,
            'i_in_progress_tasks' => $inProgressTask,
            'i_stuck_tasks' => $stuckTasks,
            'done_tasks_per_day' => $array,
            'week_start_date' => $weekStartDate,
            'week_end_date' => $weekEndDate,
        ];

        $projects = TProject::with('tasks','tasks.team', 'tasks.creator')->where(function ($query) {
            $query->where(function ($q) {
                $q->whereHas('tasks', function ($query) {
                    $query->myTask();
                })->orWhere('fk_i_user_id',auth()->id());
            });
        });

        $projectsCount = $projects->count();

        $projects1 = clone $projects;
        $projects2 = clone $projects;
        $projects3 = clone $projects;

        $inProgressProjects = $projects1
            ->where('e_status', 'IN_PROGRESS')
            ->whereDoesntHave('tasks', function ($q){
                $q->where('e_status', TaskStatusType::IN_PROGRESS)
                    ->where(function ($q){
                        $q->whereDate('dt_end_date','<',date('Y-m-d'));
                    });
            })
            ->count();

        $stuckProjects = $projects2
            ->where('e_status', 'IN_PROGRESS')
            ->whereHas('tasks', function ($q){
                $q->where('e_status', TaskStatusType::IN_PROGRESS)
                    ->where(function ($q){
                        $q->whereDate('dt_end_date','<',date('Y-m-d'));
                    });
            })
            ->count();

        $doneProjects = $projects3->where('e_status', 'DONE')
            ->count();

        $now = now();
        $monthStartDate = $now->copy()->startOfMonth()->format('Y-m-d');
        $monthEndDate = $now->copy()->endOfMonth()->format('Y-m-d');


        $array = array();
        $interval = new \DateInterval('P1D');

        $realEnd = new \DateTime($monthEndDate);
        $realEnd->add($interval);

        $period = new \DatePeriod(new \DateTime($monthStartDate), $interval, $realEnd);

        foreach ($period as $date) {
            $projectsOfDay = clone $projects;
            $array[strtolower($date->format('j'))] = $projectsOfDay->whereHas(
                "tasks",function ($q)use($date){
                $q->where( 'dt_complete_date', $date->format('Y-m-d'))
                    ->where('e_status',TaskStatusType::DONE);
            })->count();
        }

        $projectStatistics = [
            'i_total_projects' => $projectsCount,
            'i_done_projects' => $doneProjects,
            'i_in_progress_projects' => $inProgressProjects,
            'i_stuck_projects' => $stuckProjects,
            'done_projects_per_day' => $array,
        ];



        $endSoonTasks = TTask::with('team', 'creator', 'leader','project')
            ->myTask()
            ->enabled()
            ->where(function ($q1){
               $q1->where('e_status',TaskStatusType::IN_PROGRESS)
                   ->whereNotNull('dt_end_date')
                   ->where('dt_end_date','<=',Carbon::now()->addHours(48)->format("Y-m-d H:i:s"));
            })
            ->orderBy('dt_end_date','ASC')
            ->limit(8)
            ->get();

        $favoriteTasks = TTask::with('team', 'creator', 'leader','project')
            ->myTask()
            ->enabled()
            ->whereHas('favorites', function ($query) {
                $query->where('fk_i_user_id', auth()->id());
            })
            ->limit(8)
            ->get();


        $teamMembers = TUser::enabled()
            ->where('pk_i_id','<>',auth()->id())
            ->whereIn('pk_i_id',auth()->user()->getUserTeamIds())
            ->limit(8)
            ->get();

        $currentSubscription = auth()->user()->currentSubscription;

        $steps = TStep::enabled()->latest()->get();
        $steps = StepResource::collection($steps);

        return $this->setSuccess('')
            ->addResponseField( 'projectStatistics',$projectStatistics)
            ->addResponseField( 'taskStatistics',$taskStatistics)
            ->addResource( TaskResource::collection($favoriteTasks),'favoriteTasks')
            ->addResource( TaskResource::collection($endSoonTasks),'endSoonTasks')
            ->addResource( ShortUserResource::collection($teamMembers),'teamMembers')
            ->addResponseField( 'currentSubscription',($currentSubscription ? new SubscriptionResource($currentSubscription):null))
            ->addResponseField('steps', $steps)
            ->addResponseField('i_total_steps', $steps->collection->count())
            ->addResponseField('i_completed_steps', count(array_filter($steps->resolve(),fn($step) => $step['b_completed'])))
            ->getResponse();

    }
}

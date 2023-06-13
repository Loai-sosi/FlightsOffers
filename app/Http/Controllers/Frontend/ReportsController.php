<?php

namespace App\Http\Controllers\Frontend;
use App\Constants\TaskStatusType;
use App\Http\Controllers\Controller;
use App\Models\TActivity;
use App\Models\TProject;
use App\Models\TTask;
use App\Models\TUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;


class ReportsController extends Controller
{

    public function task($id)
    {
        $task = TTask::with(['resources.creator','project','comments' => function($q)use($id){
            $q->withCount('resources')->with('resources');}
            ,
            'team' =>function($q)use($id){
            $q->withCount(['comments'=>  function($q1)use($id){
                $q1->where('fk_i_task_id',$id);
            }]);

                $q->with(['comments' => function($q)use($id){
                    $q->where('t_comments.fk_i_task_id',$id);
                    $q->withCount('resources');}
                ]);
            $q->withCount(['attachments'=>  function($q1)use($id){
                $q1->where('fk_i_resourceable_id',$id);
                $q1->where('s_resourceable_type',TTask::class);
            }]);
            },
            'leader' =>function($q)use($id){
                $q->withCount(['comments' =>  function($q1)use($id){
                    $q1->where('fk_i_task_id',$id);
                }]);

                $q->with(['comments' => function($q)use($id){
                    $q->where('t_comments.fk_i_task_id',$id);
                    $q->withCount('resources');}
                    ]);
                $q->withCount(['attachments'=>  function($q1)use($id){
                    $q1->where('fk_i_resourceable_id',$id);
                    $q1->where('s_resourceable_type',TTask::class);
                }]);
            }
            ,
            'creator' =>function($q)use($id){
                $q->withCount(['comments'=>  function($q1)use($id){
                    $q1->where('fk_i_task_id',$id);
                }]);

                $q->with(['comments' => function($q)use($id){
                    $q->where('t_comments.fk_i_task_id',$id);
                    $q->withCount('resources');}
                ]);

                $q->withCount(['attachments'=>  function($q1)use($id){
                    $q1->where('fk_i_resourceable_id',$id);
                    $q1->where('s_resourceable_type',TTask::class);
                }]);
            }
            ])
            ->find($id);
        if(!$task) return "Task not found";

        $task->comments_resources_count = $task->comments->sum('resources_count');

        return view('frontend.reports.task',compact('task'));
    }

    public function project($id)
    {
        $project = TProject::with('tasks')->find($id);
        if(!$project) return "Project not found";

        $doneTask = $project->tasks()->where('e_status', 'DONE')->count();
        $taskCount = $project->tasks()->count();
        $lateTasksCount = $project->tasks->where('e_status', TaskStatusType::IN_PROGRESS)
               ->where('dt_end_date','<',date('Y-m-d'))
        ->count();
        $taskProgressAvg = $project->tasks()->avg("d_progress_percentage");

        $lastDateInProject = $project->tasks->max('dt_end_date');
        $now = Carbon::now();

        $lastDateInProject = Carbon::parse($lastDateInProject);
        $remainDaysCount = ($lastDateInProject->greaterThan($now))?
            $lastDateInProject->diffInDays($now):0;

        return view('frontend.reports.project',compact('project','doneTask',
            'taskCount','taskProgressAvg','remainDaysCount','lateTasksCount'));
    }

    public function member($id)
    {
        $user = TUser::find($id);
        if(!$user) return "User not found";

        $tasks = TTask::myTask($user)->get();

        $lastDateInProject = $tasks->max('dt_end_date');
        $progressPercent = $tasks->avg('d_progress_percentage');
        $leadingTasksCount = $tasks->where('fk_i_leader_id',$id)->count();
        $completeTasksCount = $tasks->where('e_status',TaskStatusType::DONE)->count();
        $allTasksCount = $tasks->count();
        $now = Carbon::now();

        $lastDateInProject = Carbon::parse($lastDateInProject);
        $remainDaysCount = ($lastDateInProject->greaterThan($now))?
            $lastDateInProject->diffInDays($now):0;

        return view('frontend.reports.member',compact('user','tasks','remainDaysCount'
            ,'leadingTasksCount','completeTasksCount','allTasksCount','progressPercent'));
    }


    public function printTask($id,Request $request)
    {
        Browsershot::url("https://utask.sa/")
            ->waitUntilNetworkIdle()
          //->setNodeBinary('PATH %~dp0;%PATH%;')
          //->setNpmBinary('PATH %~dp0;%PATH%;')
           ->showBackground()
           ->savePdf('example.pdf');
    }

}
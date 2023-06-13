<?php

namespace App\Http\Livewire;

use App\Models\TAdmin;
use App\Models\TContactUs;
use App\Models\TProject;
use App\Models\TTask;
use App\Models\TUser;
use App\Models\TUserSubscription;
use Livewire\Component;

class StatsPanel extends Component
{
    public function render()
    {
        $userCount = TUser::count();
        $subscriptionCount = TUserSubscription::count();
        $adminCount = TAdmin::count();
        $unreadContactCount = TContactUs::unread()->count();
        $projectCount = TProject::count();
        $taskCount = TTask::count();


        return view('livewire.stats-panel', compact('userCount', 'subscriptionCount', 'adminCount', 'unreadContactCount', 'projectCount', 'taskCount'));
    }
}

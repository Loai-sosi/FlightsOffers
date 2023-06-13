<?php

namespace App\Console\Commands;

use App\Models\TUser;
use Illuminate\Console\Command;

class FillFullNameCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:fill-full-name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        TUser::all()->each(function ($user) {
            $user->forceFill([
                's_full_name' => $user->s_first_name . ' ' . $user->s_last_name
            ])->save();
        });
    }
}

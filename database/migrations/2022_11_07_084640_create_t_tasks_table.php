<?php

use App\Constants\PriorityType;
use App\Constants\TaskStatusType;
use App\Models\TCategory;
use App\Models\TProject;
use App\Models\TUser;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_tasks', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_name')->nullable();
            $table->string('s_description')->nullable();
            $table->boolean('b_enabled')->default(1);
            $table->foreignIdFor(TUser::class, 'fk_i_leader_id')->nullable();;
            $table->foreignIdFor(TUser::class, 'fk_i_creator_id')->nullable();;
            $table->foreignIdFor(TCategory::class, 'fk_i_category_id')->nullable();;
            $table->foreignIdFor(TProject::class, 'fk_i_project_id')->nullable();;
            $table->dateTime('dt_start_date')->nullable();;
            $table->dateTime('dt_end_date')->nullable();;
            $table->integer('d_progress_percentage')->default(0);
            $table->enum('e_status', TaskStatusType::options())->default(TaskStatusType::PENDING);
            $table->enum('e_priority', PriorityType::options())->default(PriorityType::NONE);
            $table->enum('e_reminder',['ON_TIME','BEFORE_5_MINUTES','BEFORE_10_MINUTES','BEFORE_15_MINUTES','CUSTOM'])->default('ON_TIME');
            $table->dateTime('dt_custom_reminder_date')->nullable();
            $table->timestamp('dt_created_date')->nullable();
            $table->timestamp('dt_modified_date')->nullable();
            $table->timestamp('dt_deleted_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_tasks');
    }
}

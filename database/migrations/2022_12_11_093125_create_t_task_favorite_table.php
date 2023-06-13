<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTaskFavoriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_task_favorite', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\TTask::class, 'fk_i_task_id');
            $table->foreignIdFor(\App\Models\TUser::class, 'fk_i_user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_task_favorite');
    }
}

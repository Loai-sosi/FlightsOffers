<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTaskUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_task_user', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->unsignedBigInteger('fk_i_user_id')->nullable();
            $table->unsignedBigInteger('fk_i_task_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_task_user');
    }
}

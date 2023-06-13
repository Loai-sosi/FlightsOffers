<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_likes', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->unsignedBigInteger('fk_i_user_id')->nullable();
            $table->unsignedBigInteger('fk_i_task_id')->nullable();
            $table->unsignedBigInteger('fk_i_comment_id')->nullable();
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
        Schema::dropIfExists('t_likes');
    }
}

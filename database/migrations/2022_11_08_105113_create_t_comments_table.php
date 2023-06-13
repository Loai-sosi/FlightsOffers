<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_comments', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->unsignedBigInteger('fk_i_user_id')->nullable();
            $table->unsignedBigInteger('fk_i_task_id')->nullable();
            $table->unsignedBigInteger('fk_i_parent_id')->nullable();
            $table->string('s_comment')->nullable();
            $table->string('s_file')->nullable();
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
        Schema::dropIfExists('t_comments');
    }
}

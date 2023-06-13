<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_projects', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_name')->nullable();
            $table->string('s_color')->nullable();
            $table->string('s_icon')->nullable();
            $table->integer('i_progress_percentage')->default(0);
            $table->enum('e_status',['IN_PROGRESS','DONE']);
            $table->boolean('b_enabled')->default(1);
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
        Schema::dropIfExists('t_projects');
    }
}

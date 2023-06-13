<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTStepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_steps', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_title')->nullable();
            $table->string('s_description')->nullable();
            $table->string('s_icon');
            $table->enum('e_action', ['ADD_FIRST_TASK','ADD_TASK_DETAILS','ADD_TASK_MEMBERS',
                'ADD_TASK_PROGRESS','COMPLETE_TASK']);
            $table->boolean('b_enabled')->default(1);
            $table->timestamp('dt_created_date')->nullable();
            $table->timestamp('dt_modified_date')->nullable();
            $table->timestamp('dt_deleted_date')->nullable();
        });

        Schema::create('t_step_translations', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->foreignIdFor(\App\Models\TSlider::class, 'fk_i_step_id');
            $table->string('s_locale', 2)->index();
            $table->string('s_title');
            $table->text('s_description')->nullable();
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
        Schema::dropIfExists('t_steps');
        Schema::dropIfExists('t_step_translations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTaskTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_task_translations', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->foreignIdFor(\App\Models\TTask::class, 'fk_i_task_id');
            $table->string('s_locale', 2)->index();
            $table->string('s_name');
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
        Schema::dropIfExists('t_task_translations');
    }
}

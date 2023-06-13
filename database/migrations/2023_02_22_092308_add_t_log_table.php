<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('t_log', function (Blueprint $table) {
            $table->increments('pk_i_id');
            $table->integer('fk_i_creator_id')->nullable();
            $table->integer('fk_i_loggable_id')->nullable();
            $table->string('s_loggable_type', 255)->nullable();
            $table->string('s_key',255)->nullable();
            $table->string('s_note',255)->nullable();
            $table->text('s_request')->nullable();
            $table->text('s_old_data')->nullable();
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
        //
        Schema::dropIfExists('t_log');
    }
}

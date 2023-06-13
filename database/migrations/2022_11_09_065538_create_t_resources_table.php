<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_resources', function (Blueprint $table) {
            $table->increments('pk_i_id');
            $table->integer('fk_i_resourcable_id')->nullable();
            $table->string('s_resourcable_type', 255)->nullable();
            $table->string('s_title')->nullable()->change();
            $table->string('s_directory', 255)->nullable();
            $table->string('s_filename', 255)->nullable();
            $table->integer('b_enabled')->nullable()->default(1);
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
        Schema::dropIfExists('t_resources');
    }
}

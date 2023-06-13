<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkICreatorIdToResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_resources', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('fk_i_creator_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_resources', function (Blueprint $table) {
            //
            $table->dropColumn('fk_i_creator_id');
        });
    }
}

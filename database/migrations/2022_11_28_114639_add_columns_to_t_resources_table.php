<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTResourcesTable extends Migration
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
            $table->dropColumn('fk_i_resourcable_id');
            $table->dropColumn('s_resourcable_type');
            $table->integer('fk_i_resourceable_id');
            $table->string('s_resourceable_type', 255);
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
            $table->dropColumn('fk_i_resourceable_id');
            $table->dropColumn('s_resourceable_type');
        });
    }
}

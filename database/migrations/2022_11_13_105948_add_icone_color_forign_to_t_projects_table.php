<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIconeColorForignToTProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_projects', function (Blueprint $table) {
            //
            $table->dropColumn('s_color');
            $table->dropColumn('s_icon');
            $table->integer('fk_i_color_id')->nullable();
            $table->integer('fk_i_icon_id')->nullable();
            $table->foreignIdFor(\App\Models\TUser::class, 'fk_i_user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_projects', function (Blueprint $table) {
            //
            $table->dropColumn('fk_i_color_id');
            $table->dropColumn('fk_i_icon_id');
        });
    }
}

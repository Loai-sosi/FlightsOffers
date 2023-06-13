<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSTitleToTContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_contact_us', function (Blueprint $table) {
            //
            $table->string('s_title')->nullable();
            $table->dropColumn('e_type');
            $table->dropColumn('s_mobile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_contact_us', function (Blueprint $table) {
            //
            
            $table->dropColumn('s_title');
        });
    }
}

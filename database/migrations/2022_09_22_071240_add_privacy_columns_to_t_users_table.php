<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_users', function (Blueprint $table) {
            $table->boolean('b_private_phone')->default(0);
            $table->boolean('b_private_email')->default(0);
            $table->boolean('b_allow_sharing_my_profile')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_users', function (Blueprint $table) {
            $table->dropColumn('b_private_phone');
            $table->dropColumn('b_private_email');
            $table->dropColumn('b_allow_sharing_my_profile');
        });
    }
};

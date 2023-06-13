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
        Schema::table('t_user_subscriptions', function (Blueprint $table) {
            $table->dropColumn('s_name');
            $table->dropColumn('i_validity_days');
            $table->foreignIdFor(\App\Models\TPlan::class, 'fk_i_plan_id');
            $table->enum('e_type', ['IOS', 'ANDROID', 'SYSTEM'])->nullable();
        });
    }
};

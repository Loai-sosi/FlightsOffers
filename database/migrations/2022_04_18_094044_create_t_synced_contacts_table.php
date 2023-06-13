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
        Schema::create('t_synced_contacts', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->unsignedBigInteger('fk_i_user_id');
            $table->string('s_name')->nullable();
            $table->string('s_phone')->nullable();
            $table->boolean('b_enabled')->nullable()->default(true);
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
        Schema::dropIfExists('t_synced_contacts');
    }
};

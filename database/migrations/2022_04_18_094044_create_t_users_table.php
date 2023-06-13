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
        Schema::create('t_users', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_name')->nullable();
            $table->string('s_username')->nullable()->unique('s_username');
            $table->string('s_phone');
            $table->string('s_avatar')->nullable();
            $table->string('s_email')->nullable();
            $table->text('s_bio')->nullable();
            $table->boolean('b_enable_notification')->nullable()->default(true);
            $table->boolean('b_enable_complete_voice')->nullable()->default(true);
            $table->boolean('b_enable_reminder')->nullable()->default(true);
            $table->boolean('b_enable_comments')->nullable()->default(true);
            $table->string('s_site')->nullable();
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
        Schema::dropIfExists('t_users');
    }
};

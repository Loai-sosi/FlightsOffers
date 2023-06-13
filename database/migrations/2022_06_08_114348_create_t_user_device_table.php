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
        Schema::create('t_user_device', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->foreignIdFor(\App\Models\TUser::class, 'fk_i_user_id');
            $table->foreignIdFor(\Laravel\Sanctum\PersonalAccessToken::class, 'fk_i_token_id');
            $table->string('s_udid', 190)->nullable();
            $table->enum('e_pns_type', ['UNKNOWN', 'APN', 'FCM', 'WPN'])->nullable()->default('FCM');
            $table->string('s_pns_token', 512)->nullable();
            $table->string('s_client_user_agent', 255)->nullable();
            $table->string('s_client_version_name', 255)->nullable();
            $table->string('s_client_version_code', 255)->nullable();
            $table->string('s_client_platform_name', 255)->nullable();
            $table->string('s_client_platform_version', 255)->nullable();
            $table->string('s_client_device_name', 255)->nullable();
            $table->string('s_client_timezone', 255)->nullable();
            $table->string('s_client_language', 2)->nullable();
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
        Schema::dropIfExists('t_user_device');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTProjectFavoriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_project_favorite', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\TProject::class, 'fk_i_project_id');
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
        Schema::dropIfExists('t_project_favorite');
    }
}

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
        Schema::create('t_walkthroughs', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_title')->nullable();
            $table->text('s_description')->nullable();
            $table->string('s_image')->nullable();
            $table->boolean('b_enabled')->default(1);
            $table->timestamp('dt_created_date')->nullable();
            $table->timestamp('dt_modified_date')->nullable();
            $table->timestamp('dt_deleted_date')->nullable();
        });

        Schema::create('t_walkthrough_translations', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->foreignIdFor(\App\Models\TWalkthrough::class, 'fk_i_walkthrough_id');
            $table->string('s_locale',  2);
            $table->string('s_title');
            $table->string('s_description');
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
        Schema::dropIfExists('t_walkthroughs');
        Schema::dropIfExists('t_walkthrough_translations');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_tags', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_name')->nullable();
            $table->boolean('b_view_only')->default(0);
            $table->boolean('b_enabled')->default(1);
            $table->foreignIdFor(\App\Models\TTag::class, 'fk_i_parent_id')->nullable();
            $table->timestamp('dt_created_date')->nullable();
            $table->timestamp('dt_modified_date')->nullable();
            $table->timestamp('dt_deleted_date')->nullable();
        });

        Schema::create('t_tag_translations', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_locale', 2);
            $table->string('s_name');
            $table->foreignIdFor(\App\Models\TTag::class, 'fk_i_tag_id')->nullable();
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
        Schema::dropIfExists('t_tags');
        Schema::dropIfExists('t_tag_translations');
    }
}

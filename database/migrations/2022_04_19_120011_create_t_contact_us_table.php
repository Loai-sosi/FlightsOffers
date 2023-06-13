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
        Schema::create('t_contact_us', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_full_name');
            $table->string('s_email')->nullable();
            $table->string('s_phone')->nullable();
            $table->enum('e_type', ['COMPLAINT', 'SUGGESTION', 'QUESTION']);
            $table->text('s_message');
            $table->boolean('b_seen')->default(0);
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
        Schema::dropIfExists('t_contact_us');
    }
};

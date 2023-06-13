<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user_subscriptions', function (Blueprint $table) {
            $table->id('pk_i_id');
            $table->string('s_name');
            $table->foreignIdFor(\App\Models\TUser::class, 'fk_i_user_id');
            $table->float('d_price')->default(0);
            $table->integer('i_validity_days')->default(0);
            $table->date('dt_expiry_date')->nullable();
            $table->text('s_description');
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
        Schema::dropIfExists('t_user_subscriptions');
    }
}

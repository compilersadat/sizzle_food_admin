<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('chef_id')->unsigned();

            $table->string('delivery_address_id')->nullable();
            $table->string('is_saved_address')->nullable();
            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('pin')->nullable();
            $table->string('sub_total');
            $table->string('quantity');
            $table->string('price');
            $table->string('discount')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('order_fees')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('total');
            $table->string('delivery_type');
            $table->string('date');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('chef_id')->references('id')->on('chefs');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

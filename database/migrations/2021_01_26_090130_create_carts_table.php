<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('food_id')->unsigned();
            $table->bigInteger('order_id')->unsigned();

            $table->string('price');
            $table->string('quantity');
            $table->string('total');
            $table->string('order_reference');
            $table->string('status');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('food_id')->references('id')->on('foods');
            $table->foreign('order_id')->references('id')->on('orders');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}

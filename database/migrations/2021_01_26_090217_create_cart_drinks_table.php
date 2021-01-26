<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_drinks', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('cart_id')->unsigned();

            $table->bigInteger('drink_id')->unsigned();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('total')->nullable();

            $table->timestamps();
            $table->foreign('cart_id')->references('id')->on('carts');
            $table->foreign('drink_id')->references('id')->on('drinks');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_drinks');
    }
}

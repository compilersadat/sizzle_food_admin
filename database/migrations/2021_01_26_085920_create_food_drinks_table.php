<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodDrinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_drinks', function (Blueprint $table) {
            $table->id();


            $table->bigInteger('food_id')->unsigned();
            $table->bigInteger('drink_id')->unsigned();

            $table->foreign('food_id')->references('id')->on('foods');
            $table->foreign('drink_id')->references('id')->on('drinks');
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
        Schema::dropIfExists('food_drinks');
    }
}

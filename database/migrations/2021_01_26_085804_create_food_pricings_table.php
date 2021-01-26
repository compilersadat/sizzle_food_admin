<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodPricingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_pricings', function (Blueprint $table) {
            $table->id();


            $table->bigInteger('food_id')->unsigned();
            $table->string('size_name');
            $table->string('price');

            $table->foreign('food_id')->references('id')->on('foods');

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
        Schema::dropIfExists('food_pricings');
    }
}

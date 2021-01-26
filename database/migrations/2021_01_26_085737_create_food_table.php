<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('chef_id')->unsigned();
            $table->string('food_name');
            $table->string('food_image')->nullable();
            $table->string('rating')->nullable();
            $table->string('food_description')->nullable();
            $table->string('calories')->nullable();
            $table->string('allergy_info')->nullable();


            $table->string('views')->default(0);
            $table->string('prepration_time')->nullable();
            $table->string('delivery_delay_time')->nullable();


            $table->timestamps();

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
        Schema::dropIfExists('food');
    }
}

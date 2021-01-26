<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_menus', function (Blueprint $table) {
            $table->id();


            $table->bigInteger('food_id')->unsigned();
            $table->bigInteger('menu_id')->unsigned();

            $table->bigInteger('chef_id')->unsigned();
            $table->string('status');
            $table->timestamps();


            $table->foreign('food_id')->references('id')->on('foods');
            $table->foreign('menu_id')->references('id')->on('menus');
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
        Schema::dropIfExists('food_menus');
    }
}

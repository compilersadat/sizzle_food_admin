<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chef_banners', function (Blueprint $table) {
            $table->id();


            $table->bigInteger('chef_id')->unsigned();
            $table->bigInteger('food_id')->unsigned();

            $table->foreign('chef_id')->references('id')->on('chefs');
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
        Schema::dropIfExists('chef_banners');
    }
}

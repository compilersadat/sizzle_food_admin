<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customizations', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('food_id')->unsigned();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();


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
        Schema::dropIfExists('customizations');
    }
}

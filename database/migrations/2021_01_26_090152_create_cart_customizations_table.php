<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartCustomizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_customizations', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('cart_id')->unsigned();
            $table->bigInteger('customization_id')->unsigned();
            $table->string('price');

            $table->foreign('cart_id')->references('id')->on('carts');
            $table->foreign('customization_id')->references('id')->on('customizations');


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
        Schema::dropIfExists('cart_customizations');
    }
}

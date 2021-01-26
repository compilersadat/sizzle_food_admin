<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chefs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('personal_image')->nullable();

            $table->string('logo')->nullable();
            $table->string('description')->nullable();
            $table->string('rating')->nullable();
            $table->string('availability',)->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('pin')->nullable();

            $table->string('mobile');
            $table->string('email');
            $table->string('commision_rate');

            $table->bigInteger('views')->default('0');

            $table->enum('status',['active','not active']);


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
        Schema::dropIfExists('chefs');
    }
}

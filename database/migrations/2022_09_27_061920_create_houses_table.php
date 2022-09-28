<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('locaid');
            $table->string('location');
            $table->string('price');
            $table->string('price2');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('site');
            $table->string('ressite');
            $table->string('contents');
            $table->string('location2');
            $table->string('locationX');
            $table->string('locationY');
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
        Schema::dropIfExists('houses');
    }
}

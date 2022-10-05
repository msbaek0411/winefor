<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid');
            $table->string('username');
            $table->unsignedBigInteger('houseid');
            $table->string('housename');
            $table->string('count');
            $table->string('title');
            $table->string('contents');
            $table->timestamps();

            $table->foreign('userid')->references('id')->on('users');
            $table->foreign('houseid')->references('id')->on('houses');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}

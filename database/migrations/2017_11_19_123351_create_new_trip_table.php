<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_trip', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('source_city');
            $table->string('destination_city');
            $table->string('fare');
            $table->string('car_no');
            $table->integer('seats_available');
            $table->time('time');
            $table->date('date');
            $table->integer('user_id')->unsigned();


            $table->timestamps();
             $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_trip');
    }
}

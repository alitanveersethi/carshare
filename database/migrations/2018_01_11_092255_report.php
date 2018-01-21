<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Report extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->increments('id');

            $table->string('admin');
            $table->string('users');
            $table->string('login');
            $table->string('posts');
            $table->string('traffic');
            $table->string('usage');
            $table->rememberToken();
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
        //
    }
}

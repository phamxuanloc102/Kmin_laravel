<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Baiviet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tiêu đề');
            $table->string('miêu tả');
            $table->string('khu vực');
            $table->string( 'email')->unique();
            $table->string( 'address');
            $table->integer( 'level');
            $table->string( 'numberphone');
            $table->string( 'sex');
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
        Schema::dropIfExists('baiviet');
    }
}

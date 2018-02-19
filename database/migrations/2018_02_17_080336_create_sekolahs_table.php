<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSekolahsTable extends Migration
{

    public function up()
    {
        Schema::create('sekolahs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('namasekolah');
            $table->string('logo');
            $table->string('kodesekolah');
            $table->text('alamat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('sekolahs');
    }
}

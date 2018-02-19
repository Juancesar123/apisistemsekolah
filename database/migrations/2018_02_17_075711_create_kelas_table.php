<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasTable extends Migration
{

    public function up()
    {
        Schema::create('kelas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('kelas');
            $table->integer('idsekolah')->unsigned();
            // $table->foreign('idsekolah')
            //     ->references('id')
            //     ->on('sekolahs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('kelas');
    }
}

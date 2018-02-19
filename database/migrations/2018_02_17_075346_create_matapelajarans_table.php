<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatapelajaransTable extends Migration
{

    public function up()
    {
        Schema::create('matapelajarans', function(Blueprint $table) {
            $table->increments('id');
            $table->string('matapelajaran');
            $table->string('jam');
            $table->integer('idkelas')->unsigned();
            $table->integer('idsekolah')->unsigned();
            $table->string('hari');
            $table->date('tanggal');
            $table->foreign('idkelas')
                ->references('id')
                ->on('kelas');
            $table->foreign('idsekolah')
                ->references('id')
                ->on('sekolahs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('matapelajarans');
    }
}

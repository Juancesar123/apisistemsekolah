<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalpelajaransTable extends Migration
{

    public function up()
    {
        Schema::create('jadwalpelajarans', function(Blueprint $table) {
            $table->increments('id');
            $table->string('matapelejaran');
            $table->integer('id_kelas')->unsigned();
            $table->date('tanggal');
            $table->time('jammasuk');
            $table->time('jamselesai');
            $table->foreign('id_kelas')
                ->references('id')
                ->on('kelas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('jadwalpelajarans');
    }
}

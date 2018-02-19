<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcarasekolahsTable extends Migration
{

    public function up()
    {
        Schema::create('acarasekolahs', function(Blueprint $table) {
            $table->increments('id');
            $table->string('namacara');
            $table->integer('id_kelas')->unsigned();
            $table->integer('id_sekolah')->unsigned();
            $table->text('deskripsi');
            $table->string('tempatacara');
            $table->date('tanggal_acara');
            $table->foreign('id_kelas')
                ->references('id')
                ->on('kelas');
            $table->foreign('id_sekolah')
                ->references('id')
                ->on('sekolahs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('acarasekolahs');
    }
}

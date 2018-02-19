<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{

    public function up()
    {
        Schema::create('tasks', function(Blueprint $table) {
            $table->increments('id');
            $table->string('namacara');
            $table->integer('id_kelas')->unsigned();
            $table->integer('id_sekolah')->unsigned();
            $table->text('deskripsi');
            $table->string('tempatacara');
            $table->date('tanggal_acara');
            $table->integer('kela_id')->unsigned();
            $table->integer('sekolah_id')->unsigned();
            $table->foreign('kela_id')
                ->references('id')
                ->on('kelas');
            $table->foreign('sekolah_id')
                ->references('id')
                ->on('sekolahs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('tasks');
    }
}

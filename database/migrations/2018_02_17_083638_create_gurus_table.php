<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{

    public function up()
    {
        Schema::create('gurus', function(Blueprint $table) {
            $table->increments('id');
            $table->string('namaguru');
            $table->integer('idsekolah')->unsigned();
            $table->text('alamat');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->foreign('idsekolah')
                ->references('id')
                ->on('sekolahs');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('gurus');
    }
}

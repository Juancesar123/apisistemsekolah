<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{

    public function up()
    {
        Schema::create('siswas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('email');
            $table->string('kelas');
            $table->string('foto');
            $table->string('jeniskelamin');
            $table->string('tempatlahir');
            $table->string('tanggallahir');
            $table->softDeletes();
            // $table->date('due');
            // $table->integer('i')->unsigned();
            // $table->foreign('project_id')
            //     ->references('id')
            //     ->on('projects');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('siswas');
    }
}

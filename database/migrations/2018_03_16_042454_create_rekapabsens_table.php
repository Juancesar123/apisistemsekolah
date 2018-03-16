<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekapabsensTable extends Migration
{

    public function up()
    {
        Schema::create('rekapabsens', function(Blueprint $table) {
            $table->increments('id');
            $table->string('ijin');
            $table->integer('idsiswa')->unsigned();
            $table->integer('alfa');
            $table->integer('sakit');
            $table->foreign('idsiswa')
                ->references('id')
                ->on('siswas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('rekapabsens');
    }
}

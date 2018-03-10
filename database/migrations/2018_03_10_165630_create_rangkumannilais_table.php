<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRangkumannilaisTable extends Migration
{

    public function up()
    {
        Schema::create('rangkumannilais', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('idsiswa')->unsigned();
            $table->integer('nilaiharian');
            $table->integer('uts');
            $table->integer('ukk');
            $table->integer('tugas');
            $table->integer('totalnilai');
            $table->foreign('idsiswa')
                ->references('id')
                ->on('siswas');

        });
    }

    public function down()
    {
        Schema::drop('rangkumannilais');
    }
}

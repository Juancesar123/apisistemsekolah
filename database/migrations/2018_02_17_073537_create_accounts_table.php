<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{

    public function up()
    {
        Schema::create('accounts', function(Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('status');
            $table->string('statusactive');
            $table->string('foto');
            $table->string('kelas');
            $table->date('lastactive');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('accounts');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('email',50);
            $table->string('password');
            $table->string('status',30);
            $table->string('kode_sekolah');
            $table->string('statusactive',50);
            $table->string('nomortelpon',13);
            $table->string('namasekolah',50);
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}

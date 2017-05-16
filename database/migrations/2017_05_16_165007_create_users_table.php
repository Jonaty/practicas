<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_completo');
            $table->string('no_cuenta')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('rol');
            $table->boolean('activo')->default(0);

            //Llave foranea!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
            $table->integer('plantel_id')->unsigned();
            $table->foreign('plantel_id')->references('id')->on('planteles')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

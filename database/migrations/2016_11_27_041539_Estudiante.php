<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Estudiante', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaNacimiento');
            $table->string('lugarNacimiento',50);
            $table->boolean('parvularia');
            $table->string('Carnet',50);
            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario') ->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Estudiante');
    }
}

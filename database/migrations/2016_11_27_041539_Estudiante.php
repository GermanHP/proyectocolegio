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
            $table->boolean('parvularia');
            $table->boolean('repiteGrado');
            $table->boolean('retirada');
            $table->string('PersonaAutorizada',500);
            $table->string('PersonaEmergencia',500);
            $table->string('Carnet',100);
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

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PadreDeFamilia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padredefamilia', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaNacimiento');
            $table->string('DUI',10);
            $table->string('nombreLugarTrabajo',250)->nullable();
            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario') ->references('id')->on('users');
            $table->integer('idOficio')->unsigned();
            $table->foreign('idOficio') ->references('id')->on('oficios');
            $table->integer('idTipoPadre')->unsigned();
            $table->foreign('idTipoPadre') ->references('id')->on('tipopadre');
            $table->integer('idEstadoCivil')->unsigned();
            $table->foreign('idEstadoCivil') ->references('id')->on('estadocivil');

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
        Schema::drop('padredefamilia');
    }
}

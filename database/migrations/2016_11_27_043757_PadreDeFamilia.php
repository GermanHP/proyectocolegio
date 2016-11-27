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
        Schema::create('PadreDeFamilia', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaNacimiento');
            $table->string('DUI',10);
            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario') ->references('id')->on('users');
            $table->integer('idOficio')->unsigned();
            $table->foreign('idOficio') ->references('id')->on('Oficios');
            $table->integer('idTipoPadre')->unsigned();
            $table->foreign('idTipoPadre') ->references('id')->on('TipoPadre');
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
        Schema::drop('PadreDeFamilia');
    }
}

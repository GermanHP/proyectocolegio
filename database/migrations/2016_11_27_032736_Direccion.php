<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Direccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('detalle', 50);
            $table->integer('idMunicipio')->unsigned();
            $table->foreign('idMunicipio') ->references('id')->on('municipios');
            $table->integer('idTipoDireccion')->unsigned();
            $table->foreign('idTipoDireccion') ->references('id')->on('tipodireccion');
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
        Schema::drop('direcciones');
    }
}

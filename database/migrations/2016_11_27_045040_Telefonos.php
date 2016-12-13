<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Telefonos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefonos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('telefono',9);
            $table->integer('idTipoTelefono')->unsigned();
            $table->foreign('idTipoTelefono') ->references('id')->on('tipotelefonos');
            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario')->references('id')->on('users');
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
        Schema::drop('telefonos');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SacramentoUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sacramentousuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idSacramento')->unsigned();
            $table->foreign('idSacramento') ->references('id')->on('sacramento');
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
        Schema::drop('sacramentousuario');
    }
}

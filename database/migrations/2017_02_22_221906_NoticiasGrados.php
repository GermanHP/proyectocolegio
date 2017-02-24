<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NoticiasGrados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticiasgrados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Titulo');
            $table->string('Cuerpo');
            $table->integer('idGradoSeccion')->unsigned();
            $table->foreign('idGradoSeccion') ->references('id')->on('gradoseccion');
            $table->integer('idUsuarioPublicado')->unsigned();
            $table->foreign('idUsuarioPublicado') ->references('id')->on('users');
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
        Schema::drop('noticiasgrados');
    }
}

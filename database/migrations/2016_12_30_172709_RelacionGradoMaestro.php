<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionGradoMaestro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('gradoseccion', function (Blueprint $table) {
            $table->integer('idMaestroEncargado')->unsigned()->nullable();
            $table->foreign('idMaestroEncargado') ->references('id')->on('maestros');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('gradoseccion', function (Blueprint $table) {
            $table->dropForeign('gradoseccion_idmaestroencargado_foreign');
            $table->dropColumn('idMaestroEncargado');
        });
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnaGradoEnHorarioMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('materiagradohorarios', function (Blueprint $table) {
            $table->integer('idGrado')->unsigned();
            $table->foreign('idGrado') ->references('id')->on('gradoseccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materiagradohorarios', function (Blueprint $table) {
            $table->dropForeign('materiagradohorarios_idGrado_foreign');
            $table->dropColumn('idGrado');
        });
    }
}

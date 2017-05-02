<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnaIndicadorAreaRelacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('indicadoresdelogros', function (Blueprint $table) {
            $table->integer('idAreaDeDesarrollo')->unsigned();
            $table->foreign('idAreaDeDesarrollo') ->references('id')->on('areasdedesarrollokinders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('indicadoresdelogros', function (Blueprint $table) {
            $table->dropColumn('idAreaDeDesarrollo');
        });
    }
}

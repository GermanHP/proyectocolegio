<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notaskinder extends Model {

    /**
     * Generated
     */

    protected $table = 'notaskinder';
    protected $fillable = ['id', 'idGrado', 'idIndicador', 'idEstudiante', 'idPeriodo', 'idTipoNotaPrepa', 'deleted_at'];


    public function estudiante() {
        return $this->belongsTo(\App\Models\Estudiante::class, 'idEstudiante', 'id');
    }

    public function grado() {
        return $this->belongsTo(\App\Models\Grado::class, 'idGrado', 'id');
    }

    public function indicadoresdelogro() {
        return $this->belongsTo(\App\Models\Indicadoresdelogro::class, 'idIndicador', 'id');
    }

    public function periodo() {
        return $this->belongsTo(\App\Models\Periodo::class, 'idPeriodo', 'id');
    }

    public function tiponotaprepa() {
        return $this->belongsTo(\App\Models\Tiponotaprepa::class, 'idTipoNotaPrepa', 'id');
    }


}

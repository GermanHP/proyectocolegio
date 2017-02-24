<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model {

    /**
     * Generated
     */

    protected $table = 'notas';
    protected $fillable = ['id', 'nota', 'year', 'idPeriodos', 'idTipoNota', 'idEstudiante', 'idMateriaGrado', 'deleted_at'];


    public function estudiante() {
        return $this->belongsTo(\App\Models\Estudiante::class, 'idEstudiante', 'id');
    }

    public function materiagrado() {
        return $this->belongsTo(\App\Models\Materiagrado::class, 'idMateriaGrado', 'id');
    }

    public function periodo() {
        return $this->belongsTo(\App\Models\Periodo::class, 'idPeriodos', 'id');
    }

    public function tiponotum() {
        return $this->belongsTo(\App\Models\Tiponotum::class, 'idTipoNota', 'id');
    }


}

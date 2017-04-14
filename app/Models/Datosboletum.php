<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datosboletum extends Model {

    /**
     * Generated
     */

    protected $table = 'datosboleta';
    protected $fillable = ['id', 'Observaciones', 'porcentajeAsistencia', 'notaConducta', 'idEstudiante', 'idPeriodo', 'deleted_at'];


    public function estudiante() {
        return $this->belongsTo(\App\Models\Estudiante::class, 'idEstudiante', 'id');
    }

    public function periodo() {
        return $this->belongsTo(\App\Models\Periodo::class, 'idPeriodo', 'id');
    }


}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model {

    /**
     * Generated
     */

    protected $table = 'periodos';
    protected $fillable = ['id', 'nombre', 'FechaInicio', 'FechaFin', 'deleted_at'];


    public function estudiantes() {
        return $this->belongsToMany(\App\Models\Estudiante::class, 'datosboleta', 'idPeriodo', 'idEstudiante');
    }

    public function datosboleta() {
        return $this->hasMany(\App\Models\Datosboletum::class, 'idPeriodo', 'id');
    }

    public function notas() {
        return $this->hasMany(\App\Models\Nota::class, 'idPeriodos', 'id');
    }

    public function notaskinders() {
        return $this->hasMany(\App\Models\Notaskinder::class, 'idPeriodo', 'id');
    }

    public function regristronotasprepas() {
        return $this->hasMany(\App\Models\Regristronotasprepa::class, 'idPeriodos', 'id');
    }


}

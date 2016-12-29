<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Padredefamilium extends Model {

    /**
     * Generated
     */

    protected $table = 'padredefamilia';
    protected $fillable = ['id', 'fechaNacimiento', 'DUI', 'nombreLugarTrabajo', 'idUsuario', 'idOficio', 'idTipoPadre', 'idEstadoCivil', 'deleted_at'];


    public function estadocivil() {
        return $this->belongsTo(\App\Models\Estadocivil::class, 'idEstadoCivil', 'id');
    }

    public function oficio() {
        return $this->belongsTo(\App\Models\Oficio::class, 'idOficio', 'id');
    }

    public function tipopadre() {
        return $this->belongsTo(\App\Models\Tipopadre::class, 'idTipoPadre', 'id');
    }

    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'idUsuario', 'id');
    }

    public function estudiantes() {
        return $this->belongsToMany(\App\Models\Estudiante::class, 'padreestudiante', 'idPadre', 'idEstudiante');
    }

    public function padreestudiantes() {
        return $this->hasMany(\App\Models\Padreestudiante::class, 'idPadre', 'id');
    }


}

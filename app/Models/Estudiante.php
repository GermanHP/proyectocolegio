<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model {

    /**
     * Generated
     */

    protected $table = 'estudiante';
    protected $fillable = ['id', 'fechaNacimiento', 'parvularia', 'repiteGrado','retirada', 'PersonaAutorizada', 'PersonaEmergencia', 'Carnet', 'idUsuario', 'deleted_at'];


    public function user() {
        return $this->belongsTo('App\Models\User', 'idUsuario', 'id');
    }

    public function enfermedades() {
        return $this->belongsToMany('App\Models\Enfermedade', 'estudianteenfermedad', 'idEstudiante', 'idEnfermedad');
    }

    public function padredefamilia() {
        return $this->belongsToMany('App\Models\Padredefamilium', 'padreestudiante', 'idEstudiante', 'idPadre');
    }

    public function estudianteenfermedads() {
        return $this->hasMany('App\Models\Estudianteenfermedad', 'idEstudiante', 'id');
    }

    public function historicoestudiantes() {
        return $this->hasMany('App\Models\Historicoestudiante', 'idEstudiante', 'id');
    }

    public function matriculas() {
        return $this->hasMany('App\Models\Matricula', 'idEstudiante', 'id');
    }

    public function padreestudiantes() {
        return $this->hasMany('App\Models\Padreestudiante', 'idEstudiante', 'id');
    }


}

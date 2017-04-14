<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model {

    /**
     * Generated
     */

    protected $table = 'estudiante';
    protected $fillable = ['id', 'fechaNacimiento', 'parvularia', 'repiteGrado', 'retirada', 'PersonaAutorizada', 'PersonaEmergencia', 'Carnet', 'idUsuario', 'deleted_at'];

    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'idUsuario', 'id');
    }

    public function enfermedades() {
        return $this->belongsToMany(\App\Models\Enfermedade::class, 'estudianteenfermedad', 'idEstudiante', 'idEnfermedad');
    }

    public function grados() {
        return $this->belongsToMany(\App\Models\Grado::class, 'historicoestudiante', 'idEstudiante', 'GradoAnterior');
    }

    public function padredefamilia() {
        return $this->belongsToMany(\App\Models\Padredefamilium::class, 'padreestudiante', 'idEstudiante', 'idPadre');
    }

    public function estudianteenfermedads() {
        return $this->hasMany(\App\Models\Estudianteenfermedad::class, 'idEstudiante', 'id');
    }

    public function historicoestudiantes() {
        return $this->hasMany(\App\Models\Historicoestudiante::class, 'idEstudiante', 'id');
    }

    public function matriculas() {
        return $this->hasMany(\App\Models\Matricula::class, 'idEstudiante', 'id');
    }

    public function notas() {
        return $this->hasMany(\App\Models\Nota::class, 'idEstudiante', 'id');
    }

    public function padreestudiantes() {
        return $this->hasMany(\App\Models\Padreestudiante::class, 'idEstudiante', 'id');
    }

    public function regristronotasprepas() {
        return $this->hasMany(\App\Models\Regristronotasprepa::class, 'idEstudiante', 'id');
    }

    public function datosboleta() {
        return $this->hasMany(\App\Models\Datosboletum::class, 'idEstudiante', 'id');
    }
    public function periodos() {
        return $this->belongsToMany(\App\Models\Periodo::class, 'datosboleta', 'idEstudiante', 'idPeriodo');
    }

}

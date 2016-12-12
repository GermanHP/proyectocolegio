<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model {

    /**
     * Generated
     */

    protected $table = 'matriculas';
    protected $fillable = ['id', 'idCurso', 'Observaciones', 'idEstudiante', 'idGradoSeccion', 'deleted_at'];


    public function estudiante() {
        return $this->belongsTo('App\Models\Estudiante', 'idEstudiante', 'id');
    }

    public function gradoseccion() {
        return $this->belongsTo('App\Models\Gradoseccion', 'idGradoSeccion', 'id');
    }

    public function documentos() {
        return $this->belongsToMany('App\Models\Documento', 'matriculadocumento', 'idMatricula', 'idDocumento');
    }

    public function matriculadocumentos() {
        return $this->hasMany('App\Models\Matriculadocumento', 'idMatricula', 'id');
    }


}

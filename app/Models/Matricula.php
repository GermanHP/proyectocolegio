<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model {

    /**
     * Generated
     */

    protected $table = 'matriculas';
    protected $fillable = ['id', 'idCurso', 'Observaciones', 'idEstudiante', 'idGradoSeccion', 'deleted_at'];


    public function estudiante() {
        return $this->belongsTo(\App\Models\Estudiante::class, 'idEstudiante', 'id');
    }

    public function gradoseccion() {
        return $this->belongsTo(\App\Models\Gradoseccion::class, 'idGradoSeccion', 'id');
    }

    public function documentos() {
        return $this->belongsToMany(\App\Models\Documento::class, 'matriculadocumento', 'idMatricula', 'idDocumento');
    }

    public function matriculadocumentos() {
        return $this->hasMany(\App\Models\Matriculadocumento::class, 'idMatricula', 'id');
    }


}

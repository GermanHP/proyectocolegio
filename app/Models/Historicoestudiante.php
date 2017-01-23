<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historicoestudiante extends Model {

    /**
     * Generated
     */

    protected $table = 'historicoestudiante';
    protected $fillable = ['id', 'InstitucionAnteior', 'GradoAnterior', 'idEstudiante', 'deleted_at'];


    public function grado() {
        return $this->belongsTo(\App\Models\Grado::class, 'GradoAnterior', 'id');
    }

    public function estudiante() {
        return $this->belongsTo(\App\Models\Estudiante::class, 'idEstudiante', 'id');
    }


}

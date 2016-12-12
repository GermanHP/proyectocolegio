<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historicoestudiante extends Model {

    /**
     * Generated
     */

    protected $table = 'historicoestudiante';
    protected $fillable = ['id', 'InstitucionAnteior', 'GradoAnterior', 'idEstudiante', 'deleted_at'];


    public function grado() {
        return $this->belongsTo('App\Models\Grado', 'GradoAnterior', 'id');
    }

    public function estudiante() {
        return $this->belongsTo('App\Models\Estudiante', 'idEstudiante', 'id');
    }


}

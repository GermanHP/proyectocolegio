<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model {

    /**
     * Generated
     */

    protected $table = 'grados';
    protected $fillable = ['id', 'nombre', 'deleted_at'];


    public function estudiantes() {
        return $this->belongsToMany(\App\Models\Estudiante::class, 'historicoestudiante', 'GradoAnterior', 'idEstudiante');
    }

    public function gradoseccions() {
        return $this->hasMany(\App\Models\Gradoseccion::class, 'idGrado', 'id');
    }

    public function historicoestudiantes() {
        return $this->hasMany(\App\Models\Historicoestudiante::class, 'GradoAnterior', 'id');
    }


}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enfermedade extends Model {

    /**
     * Generated
     */

    protected $table = 'enfermedades';
    protected $fillable = ['id', 'nombreEnfermedad', 'deleted_at'];


    public function estudiantes() {
        return $this->belongsToMany('App\Models\Estudiante', 'estudianteenfermedad', 'idEnfermedad', 'idEstudiante');
    }

    public function estudianteenfermedads() {
        return $this->hasMany('App\Models\Estudianteenfermedad', 'idEnfermedad', 'id');
    }


}

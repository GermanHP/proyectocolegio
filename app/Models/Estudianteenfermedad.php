<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudianteenfermedad extends Model {

    /**
     * Generated
     */

    protected $table = 'estudianteenfermedad';
    protected $fillable = ['id', 'Tratamiento', 'idEstudiante', 'idEnfermedad', 'deleted_at'];


    public function enfermedade() {
        return $this->belongsTo('App\Models\Enfermedade', 'idEnfermedad', 'id');
    }

    public function estudiante() {
        return $this->belongsTo('App\Models\Estudiante', 'idEstudiante', 'id');
    }


}

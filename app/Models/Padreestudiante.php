<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Padreestudiante extends Model {

    /**
     * Generated
     */

    protected $table = 'padreestudiante';
    protected $fillable = ['id', 'idEstudiante', 'idPadre', 'deleted_at'];


    public function estudiante() {
        return $this->belongsTo(\App\Models\Estudiante::class, 'idEstudiante', 'id');
    }

    public function padredefamilium() {
        return $this->belongsTo(\App\Models\Padredefamilium::class, 'idPadre', 'id');
    }


}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Padreestudiante extends Model {

    /**
     * Generated
     */

    protected $table = 'padreestudiante';
    protected $fillable = ['id', 'Tratamiento', 'idEstudiante', 'idPadre', 'deleted_at'];


    public function estudiante() {
        return $this->belongsTo('App\Models\Estudiante', 'idEstudiante', 'id');
    }

    public function padredefamilium() {
        return $this->belongsTo('App\Models\Padredefamilium', 'idPadre', 'id');
    }


}

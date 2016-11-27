<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Padredefamilium extends Model {

    /**
     * Generated
     */

    protected $table = 'padredefamilia';
    protected $fillable = ['id', 'fechaNacimiento', 'DUI', 'idUsuario', 'idOficio', 'idTipoPadre', 'deleted_at'];


    public function oficio() {
        return $this->belongsTo('App\Models\Oficio', 'idOficio', 'id');
    }

    public function tipopadre() {
        return $this->belongsTo('App\Models\Tipopadre', 'idTipoPadre', 'id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'idUsuario', 'id');
    }

    public function estudiantes() {
        return $this->belongsToMany('App\Models\Estudiante', 'padreestudiante', 'idPadre', 'idEstudiante');
    }

    public function padreestudiantes() {
        return $this->hasMany('App\Models\Padreestudiante', 'idPadre', 'id');
    }


}

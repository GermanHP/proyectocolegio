<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model {

    /**
     * Generated
     */

    protected $table = 'municipios';
    protected $fillable = ['id', 'nombre', 'idDepartamento', 'deleted_at'];


    public function departamento() {
        return $this->belongsTo('App\Models\Departamento', 'idDepartamento', 'id');
    }

    public function users() {
        return $this->belongsToMany('App\Models\User', 'direcciones', 'idMunicipio', 'idUsuario');
    }

    public function direcciones() {
        return $this->hasMany('App\Models\Direccione', 'idMunicipio', 'id');
    }


}

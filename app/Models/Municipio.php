<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model {

    /**
     * Generated
     */

    protected $table = 'municipios';
    protected $fillable = ['id', 'nombre', 'id_departamento', 'deleted_at'];


    public function departamento() {
        return $this->belongsTo(\App\Models\Departamento::class, 'id_departamento', 'id');
    }

    public function direcciones() {
        return $this->hasMany(\App\Models\Direccione::class, 'idMunicipio', 'id');
    }


}

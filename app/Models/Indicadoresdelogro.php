<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicadoresdelogro extends Model {

    /**
     * Generated
     */

    protected $table = 'indicadoresdelogros';
    protected $fillable = ['id', 'nombreIndicador', 'idGrado', 'deleted_at', 'idAreaDeDesarrollo'];


    public function areasdedesarrollokinder() {
        return $this->belongsTo(\App\Models\Areasdedesarrollokinder::class, 'idAreaDeDesarrollo', 'id');
    }

    public function gradoSeccion() {
        return $this->belongsTo(\App\Models\Gradoseccion::class, 'idGrado', 'id');
    }

    public function notaskinders() {
        return $this->hasMany(\App\Models\Notaskinder::class, 'idIndicador', 'id');
    }


}

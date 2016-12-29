<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model {

    /**
     * Generated
     */

    protected $table = 'maestros';
    protected $fillable = ['id', 'titulo', 'descripcion', 'foto', 'idUsuario', 'deleted_at'];


    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'idUsuario', 'id');
    }

    public function materiagrados() {
        return $this->hasMany(\App\Models\Materiagrado::class, 'idMaestroResponsable', 'id');
    }


}

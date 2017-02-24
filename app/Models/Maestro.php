<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Maestro extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'maestros';
    protected $fillable = ['id', 'titulo', 'descripcion', 'foto', 'idUsuario', 'deleted_at'];

    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'idUsuario', 'id');
    }

    public function gradoseccions() {
        return $this->hasMany(\App\Models\Gradoseccion::class, 'idMaestroEncargado', 'id');
    }

    public function materiagrados() {
        return $this->hasMany(\App\Models\Materiagrado::class, 'idMaestroResponsable', 'id');
    }


}

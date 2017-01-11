<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Maestro extends Model {

    /**
     * Generated
     */
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = 'maestros';
    protected $fillable = ['id', 'titulo', 'descripcion', 'foto', 'idUsuario','usuarioMoodle','passwordMoodle', 'deleted_at'];


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

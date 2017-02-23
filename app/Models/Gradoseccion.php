<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gradoseccion extends Model {

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
    protected $table = 'gradoseccion';
    protected $fillable = ['id', 'idGrado', 'idSeccion', 'deleted_at', 'idMaestroEncargado'];


    public function grado() {
        return $this->belongsTo(\App\Models\Grado::class, 'idGrado', 'id');
    }

    public function maestro() {
        return $this->belongsTo(\App\Models\Maestro::class, 'idMaestroEncargado', 'id');
    }

    public function seccion() {
        return $this->belongsTo(\App\Models\Seccion::class, 'idSeccion', 'id');
    }

    public function users() {
        return $this->belongsToMany(\App\Models\User::class, 'noticiasgrados', 'idGradoSeccion', 'idUsuarioPublicado');
    }

    public function materiagrados() {
        return $this->hasMany(\App\Models\Materiagrado::class, 'idGradoSeccion', 'id');
    }

    public function materiagradohorarios() {
        return $this->hasMany(\App\Models\Materiagradohorario::class, 'idGrado', 'id');
    }

    public function matriculas() {
        return $this->hasMany(\App\Models\Matricula::class, 'idGradoSeccion', 'id');
    }

    public function noticiasgrados() {
        return $this->hasMany(\App\Models\Noticiasgrado::class, 'idGradoSeccion', 'id');
    }


}

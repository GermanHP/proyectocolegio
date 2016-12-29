<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gradoseccion extends Model {

    /**
     * Generated
     */

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'gradoseccion';
    protected $fillable = ['id', 'idGrado', 'idSeccion', 'deleted_at'];


    public function grado() {
        return $this->belongsTo(\App\Models\Grado::class, 'idGrado', 'id');
    }

    public function seccion() {
        return $this->belongsTo(\App\Models\Seccion::class, 'idSeccion', 'id');
    }

    public function materiagrados() {
        return $this->hasMany(\App\Models\Materiagrado::class, 'idGradoSeccion', 'id');
    }

    public function matriculas() {
        return $this->hasMany(\App\Models\Matricula::class, 'idGradoSeccion', 'id');
    }


}

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
    protected $fillable = ['id', 'idGrado', 'idSeccion', 'deleted_at'];



    public function grado() {
        return $this->belongsTo('App\Models\Grado', 'idGrado', 'id');
    }


    public function seccion() {
        return $this->belongsTo('App\Models\Seccion', 'idSeccion', 'id');
    }


    public function matriculas() {
        return $this->hasMany('App\Models\Matricula', 'idGradoSeccion', 'id');
    }


}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model {

    /**
     * Generated
     */

    protected $table = 'seccion';
    protected $fillable = ['id', 'nombre', 'deleted_at'];


    public function matriculas() {
        return $this->hasMany('App\Models\Matricula', 'idSeccion', 'id');
    }


}

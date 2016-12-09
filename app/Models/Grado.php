<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model {

    /**
     * Generated
     */

    protected $table = 'grados';
    protected $fillable = ['id', 'nombre', 'deleted_at'];


    public function gradoseccions() {
        return $this->hasMany('App\Models\Gradoseccion', 'idGrado', 'id');
    }


}

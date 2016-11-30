<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model {

    /**
     * Generated
     */

    protected $table = 'departamentos';
    protected $fillable = ['id', 'nombreDepartamento', 'deleted_at'];


    public function municipios() {
        return $this->hasMany('App\Models\Municipio', 'idDepartamento', 'id');
    }


}

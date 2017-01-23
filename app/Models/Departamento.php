<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model {

    /**
     * Generated
     */

    protected $table = 'departamentos';
    protected $fillable = ['id', 'nombre', 'deleted_at'];


    public function municipios() {
        return $this->hasMany(\App\Models\Municipio::class, 'id_departamento', 'id');
    }


}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model {

    /**
     * Generated
     */

    protected $table = 'materias';
    protected $fillable = ['id', 'nombre', 'deleted_at','OrdenMateriaBoleta'];


    public function materiagrados() {
        return $this->hasMany(\App\Models\Materiagrado::class, 'idMateria', 'id');
    }


}

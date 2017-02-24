<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model {

    /**
     * Generated
     */

    protected $table = 'periodos';
    protected $fillable = ['id', 'nombre', 'FechaInicio', 'FechaFin', 'deleted_at'];


    public function notas() {
        return $this->hasMany(\App\Models\Nota::class, 'idPeriodos', 'id');
    }


}

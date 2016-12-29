<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipodireccion extends Model {

    /**
     * Generated
     */

    protected $table = 'tipodireccion';
    protected $fillable = ['id', 'nombre', 'deleted_at'];


    public function direcciones() {
        return $this->hasMany(\App\Models\Direccione::class, 'idTipoDireccion', 'id');
    }


}

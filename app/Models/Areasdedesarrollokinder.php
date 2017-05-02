<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Areasdedesarrollokinder extends Model {

    /**
     * Generated
     */

    protected $table = 'areasdedesarrollokinders';
    protected $fillable = ['id', 'nombre', 'deleted_at'];


    public function indicadoresdelogros() {
        return $this->hasMany(\App\Models\Indicadoresdelogro::class, 'idAreaDeDesarrollo', 'id');
    }


}

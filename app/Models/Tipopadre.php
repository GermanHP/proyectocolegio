<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipopadre extends Model {

    /**
     * Generated
     */

    protected $table = 'tipopadre';
    protected $fillable = ['id', 'tipo', 'deleted_at'];


    public function padredefamilia() {
        return $this->hasMany(\App\Models\Padredefamilium::class, 'idTipoPadre', 'id');
    }


}

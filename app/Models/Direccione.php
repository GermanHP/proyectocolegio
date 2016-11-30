<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccione extends Model {

    /**
     * Generated
     */

    protected $table = 'direcciones';
    protected $fillable = ['id', 'detalle', 'idMunicipio', 'idUsuario', 'deleted_at'];


    public function municipio() {
        return $this->belongsTo('App\Models\Municipio', 'idMunicipio', 'id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'idUsuario', 'id');
    }


}

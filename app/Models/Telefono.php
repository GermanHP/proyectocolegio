<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model {

    /**
     * Generated
     */

    protected $table = 'telefonos';
    protected $fillable = ['id', 'telefono', 'idTipoTelefono', 'idUsuario', 'deleted_at'];


    public function tipotelefono() {
        return $this->belongsTo('App\Models\Tipotelefono', 'idTipoTelefono', 'id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'idUsuario', 'id');
    }


}

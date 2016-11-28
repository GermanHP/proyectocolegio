<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipotelefono extends Model {

    /**
     * Generated
     */

    protected $table = 'tipotelefonos';
    protected $fillable = ['id', 'nombre', 'deleted_at'];


    public function users() {
        return $this->belongsToMany('App\Models\User', 'telefonos', 'idTipoTelefono', 'idUsuario');
    }

    public function telefonos() {
        return $this->hasMany('App\Models\Telefono', 'idTipoTelefono', 'id');
    }


}

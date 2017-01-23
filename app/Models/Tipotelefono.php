<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipotelefono extends Model {

    /**
     * Generated
     */

    protected $table = 'tipotelefonos';
    protected $fillable = ['id', 'tipo', 'deleted_at'];


    public function users() {
        return $this->belongsToMany(\App\Models\User::class, 'telefonos', 'idTipoTelefono', 'idUsuario');
    }

    public function telefonos() {
        return $this->hasMany(\App\Models\Telefono::class, 'idTipoTelefono', 'id');
    }


}

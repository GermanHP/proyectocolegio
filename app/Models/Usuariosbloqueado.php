<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuariosbloqueado extends Model {

    /**
     * Generated
     */

    protected $table = 'usuariosbloqueados';
    protected $fillable = ['id', 'motivoBloqueo', 'idUsuario', 'deleted_at'];


    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'idUsuario', 'id');
    }


}

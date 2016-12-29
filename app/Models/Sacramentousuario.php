<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sacramentousuario extends Model {

    /**
     * Generated
     */

    protected $table = 'sacramentousuario';
    protected $fillable = ['id', 'idSacramento', 'idUsuario', 'deleted_at'];


    public function sacramento() {
        return $this->belongsTo(\App\Models\Sacramento::class, 'idSacramento', 'id');
    }

    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'idUsuario', 'id');
    }


}

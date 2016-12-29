<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sacramento extends Model {

    /**
     * Generated
     */

    protected $table = 'sacramento';
    protected $fillable = ['id', 'nombre', 'deleted_at'];


    public function users() {
        return $this->belongsToMany(\App\Models\User::class, 'sacramentousuario', 'idSacramento', 'idUsuario');
    }

    public function sacramentousuarios() {
        return $this->hasMany(\App\Models\Sacramentousuario::class, 'idSacramento', 'id');
    }


}

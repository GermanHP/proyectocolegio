<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipousuario extends Model {

    /**
     * Generated
     */

    protected $table = 'tipousuario';
    protected $fillable = ['id', 'tipo', 'deleted_at'];


    public function users() {
        return $this->hasMany(\App\Models\User::class, 'idTipousuario', 'id');
    }


}

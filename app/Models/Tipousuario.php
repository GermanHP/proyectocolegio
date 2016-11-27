<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipousuario extends Model {

    /**
     * Generated
     */

    protected $table = 'tipousuario';
    protected $fillable = ['id', 'nombre', 'deleted_at'];


    public function users() {
        return $this->hasMany('App\Models\User', 'idTipousuario', 'id');
    }


}

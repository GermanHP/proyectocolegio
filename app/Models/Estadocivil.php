<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estadocivil extends Model {

    /**
     * Generated
     */

    protected $table = 'estadocivil';
    protected $fillable = ['id', 'nombre', 'deleted_at'];


    public function padredefamilia() {
        return $this->hasMany('App\Models\Padredefamilium', 'idEstadoCivil', 'id');
    }


}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficio extends Model {

    /**
     * Generated
     */

    protected $table = 'oficios';
    protected $fillable = ['id', 'nombre', 'deleted_at'];


    public function padredefamilia() {
        return $this->hasMany('App\Models\Padredefamilium', 'idOficio', 'id');
    }


}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diasdisponible extends Model {

    /**
     * Generated
     */

    protected $table = 'diasdisponibles';
    protected $fillable = ['id', 'nombre', 'deleted_at'];


    public function materiagradohorarios() {
        return $this->hasMany(\App\Models\Materiagradohorario::class, 'idDiasDisponibles', 'id');
    }


}

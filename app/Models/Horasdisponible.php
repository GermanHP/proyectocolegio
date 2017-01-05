<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horasdisponible extends Model {

    /**
     * Generated
     */

    protected $table = 'horasdisponibles';
    protected $fillable = ['id', 'horaInicio', 'horaFin', 'deleted_at'];


    public function materiagradohorarios() {
        return $this->hasMany(\App\Models\Materiagradohorario::class, 'idHorasDisponibles', 'id');
    }


}

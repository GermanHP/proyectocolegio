<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materiagradohorario extends Model {

    /**
     * Generated
     */

    protected $table = 'materiagradohorarios';
    protected $fillable = ['id', 'idDiasDisponibles', 'idHorasDisponibles', 'idMateriaGrado', 'Descripcion', 'deleted_at'];


    public function diasdisponible() {
        return $this->belongsTo(\App\Models\Diasdisponible::class, 'idDiasDisponibles', 'id');
    }

    public function horasdisponible() {
        return $this->belongsTo(\App\Models\Horasdisponible::class, 'idHorasDisponibles', 'id');
    }

    public function materiagrado() {
        return $this->belongsTo(\App\Models\Materiagrado::class, 'idMateriaGrado', 'id');
    }


}

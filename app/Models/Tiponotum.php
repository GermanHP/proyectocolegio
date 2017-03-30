<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiponotum extends Model {

    /**
     * Generated
     */

    protected $table = 'tiponota';
    protected $fillable = ['id', 'nombre', 'porcentaje', 'deleted_at'];


    public function notas() {
        return $this->hasMany(\App\Models\Nota::class, 'idTipoNota', 'id');
    }

    public function regristronotasprepas() {
        return $this->hasMany(\App\Models\Regristronotasprepa::class, 'idTipoNota', 'id');
    }


}

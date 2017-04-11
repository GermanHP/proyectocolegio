<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiponotaprepa extends Model {

    /**
     * Generated
     */

    protected $table = 'tipoNotaPrepa';
    protected $fillable = ['id', 'nota', 'significado', 'deleted_at'];


    public function regristronotasprepas() {
        return $this->hasMany(\App\Models\Regristronotasprepa::class, 'idNota', 'id');
    }


}

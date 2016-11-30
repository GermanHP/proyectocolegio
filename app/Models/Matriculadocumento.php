<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matriculadocumento extends Model {

    /**
     * Generated
     */

    protected $table = 'matriculadocumento';
    protected $fillable = ['id', 'idMatricula', 'idDocumento', 'deleted_at'];


    public function documento() {
        return $this->belongsTo('App\Models\Documento', 'idDocumento', 'id');
    }

    public function matricula() {
        return $this->belongsTo('App\Models\Matricula', 'idMatricula', 'id');
    }


}

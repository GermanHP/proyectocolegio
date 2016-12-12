<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model {

    /**
     * Generated
     */

    protected $table = 'documentos';
    protected $fillable = ['id', 'nombre', 'deleted_at'];


    public function matriculas() {
        return $this->belongsToMany('App\Models\Matricula', 'matriculadocumento', 'idDocumento', 'idMatricula');
    }

    public function matriculadocumentos() {
        return $this->hasMany('App\Models\Matriculadocumento', 'idDocumento', 'id');
    }


}

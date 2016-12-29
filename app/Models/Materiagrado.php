<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materiagrado extends Model {

    /**
     * Generated
     */

    protected $table = 'materiagrado';
    protected $fillable = ['id', 'idGradoSeccion', 'idMateria', 'idMaestroResponsable', 'Descripcion', 'deleted_at'];


    public function gradoseccion() {
        return $this->belongsTo('App\Models\Gradoseccion', 'idGradoSeccion', 'id');
    }

    public function maestro() {
        return $this->belongsTo('App\Models\Maestro', 'idMaestroResponsable', 'id');
    }

    public function materium() {
        return $this->belongsTo('App\Models\Materia', 'idMateria', 'id');
    }


}

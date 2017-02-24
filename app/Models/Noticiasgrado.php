<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticiasgrado extends Model {

    /**
     * Generated
     */

    protected $table = 'noticiasgrados';
    protected $fillable = ['id', 'Titulo', 'Cuerpo', 'idGradoSeccion', 'idUsuarioPublicado', 'deleted_at'];


    public function gradoseccion() {
        return $this->belongsTo(\App\Models\Gradoseccion::class, 'idGradoSeccion', 'id');
    }

    public function user() {
        return $this->belongsTo(\App\Models\User::class, 'idUsuarioPublicado', 'id');
    }


}

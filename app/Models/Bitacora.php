<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model {

    /**
     * Generated
     */

    protected $table = 'bitacora';
    protected $fillable = ['id', 'idUsuario', 'Acccion', 'Otra Informacion', 'deleted_at'];



}

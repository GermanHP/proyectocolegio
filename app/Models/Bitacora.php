<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model {

    /**
     * Generated
     */

    protected $table = 'Bitacora';
    protected $fillable = ['id', 'idUsuario', 'Acccion', 'Otra Informacion', 'deleted_at'];



}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */

    protected $table = 'users';
    protected $fillable = ['id', 'nombre', 'apellido', 'genero', 'email', 'password', 'passwordMoodle','resetPassword', 'idTipousuario', 'remember_token', 'deleted_at'];


    public function tipousuario() {
        return $this->belongsTo(\App\Models\Tipousuario::class, 'idTipousuario', 'id');
    }

    public function sacramentos() {
        return $this->belongsToMany(\App\Models\Sacramento::class, 'sacramentousuario', 'idUsuario', 'idSacramento');
    }

    public function tipotelefonos() {
        return $this->belongsToMany(\App\Models\Tipotelefono::class, 'telefonos', 'idUsuario', 'idTipoTelefono');
    }

    public function direcciones() {
        return $this->hasMany(\App\Models\Direccione::class, 'idUsuario', 'id');
    }

    public function estudiantes() {
        return $this->hasMany(\App\Models\Estudiante::class, 'idUsuario', 'id');
    }

    public function maestros() {
        return $this->hasMany(\App\Models\Maestro::class, 'idUsuario', 'id');
    }

    public function padredefamilia() {
        return $this->hasMany(\App\Models\Padredefamilium::class, 'idUsuario', 'id');
    }

    public function sacramentousuarios() {
        return $this->hasMany(\App\Models\Sacramentousuario::class, 'idUsuario', 'id');
    }

    public function telefonos() {
        return $this->hasMany(\App\Models\Telefono::class, 'idUsuario', 'id');
    }


}

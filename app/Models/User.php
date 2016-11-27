<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    /**
     * Generated
     */

    protected $table = 'users';
    protected $fillable = ['id', 'nombre', 'apellido', 'genero', 'email', 'password', 'idTipousuario', 'remember_token', 'deleted_at'];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function tipousuario() {
        return $this->belongsTo('App\Models\Tipousuario', 'idTipousuario', 'id');
    }

    public function municipios() {
        return $this->belongsToMany('App\Models\Municipio', 'direcciones', 'idUsuario', 'idMunicipio');
    }

    public function sacramentos() {
        return $this->belongsToMany('App\Models\Sacramento', 'sacramentousuario', 'idUsuario', 'idSacramento');
    }

    public function tipotelefonos() {
        return $this->belongsToMany('App\Models\Tipotelefono', 'telefonos', 'idUsuario', 'idTipoTelefono');
    }

    public function direcciones() {
        return $this->hasMany('App\Models\Direccione', 'idUsuario', 'id');
    }

    public function estudiantes() {
        return $this->hasMany('App\Models\Estudiante', 'idUsuario', 'id');
    }

    public function padredefamilia() {
        return $this->hasMany('App\Models\Padredefamilium', 'idUsuario', 'id');
    }

    public function sacramentousuarios() {
        return $this->hasMany('App\Models\Sacramentousuario', 'idUsuario', 'id');
    }

    public function telefonos() {
        return $this->hasMany('App\Models\Telefono', 'idUsuario', 'id');
    }


}

<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract {

    /**
     * Generated
     */
    public $timestamps = true;
    use Authenticatable, Authorizable, CanResetPassword, SoftDeletes;

    protected $table = 'users';
    protected $fillable = ['id', 'nombre', 'apellido', 'genero', 'email', 'password', 'usuarioMoodle','passwordMoodle','TokenPushNotification', 'resetPassword', 'idTipousuario', 'remember_token', 'deleted_at'];
    protected $guarded = [];

    protected $dates = ['deleted_at'];

    protected $hidden = ['password', 'remember_token'];

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

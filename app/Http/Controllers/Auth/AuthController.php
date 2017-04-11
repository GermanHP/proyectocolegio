<?php

namespace App\Http\Controllers\Auth;

use App\Models\Bitacora;
use App\Models\User;
use Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
   protected $redirectTo = '/MisMaterias';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    protected function authenticated($request, $usuario)
    {
        setcookie('__cfduid','',time()-1000000, "/", ".colegiosjb.net");
        setcookie('MoodleSession','',time()-1000000, "/", ".colegiosjb.net");
        $bitacora = new Bitacora();
        $bitacora->fill([
            'idUsuario'=>Auth::user()->id,
            'Acccion'=>'LOGIN',
            'Otra Informacion'=>'loginCorrecto'
        ]);
        $bitacora->save();
                if($usuario->idTipousuario==5){
                    if($usuario->resetPassword==1){
                        return redirect()->route('cambiar.Password');
                    }
                    return redirect()->route('registro.index');
                }else if($usuario->idTipousuario==3) {
                    if($usuario->resetPassword==1){
                        return redirect()->route('cambiar.Password');
                    }
                    return redirect()->route('MisMaterias.Maestro');
                }else if($usuario->idTipousuario==1) {
                    if($usuario->resetPassword==1){
                        return redirect()->route('cambiar.Password');
                    }
                    return redirect()->route('Alumno.MisClases');
                }else if($usuario->idTipousuario==2) {
                    if($usuario->resetPassword==1){
                        return redirect()->route('cambiar.Password');
                    }
                    return redirect()->route('Padres.MisHijos');
                }else{
                   return redirect('/logout');
                }


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}

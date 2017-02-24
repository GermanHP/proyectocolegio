<?php

namespace App\Http\Controllers;



use App\Models\User;
use ErrorException;
use Exception;
use Illuminate\Http\Request;

use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginAPI extends Controller
{

    public function LoginUser(Request $request)
    {

        /*{
            "email":"test@test.com",
            "password":"1234556",
            "TokenPush":"1231242342"
        }*/
        try {

            $credentials = $request->only('email', 'password');
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['ErrorCode' => '2', 'msg' => 'Datos incorecctos']);
            }


            $user = JWTAuth::toUser($token);
            if($user->idTipousuario ==2){
                if($request['TokenPush']!=null){
                    $usuarioE = User::where('id',$user->id)->first();
                    $usuarioE->fill([
                        'TokenPushNotification'=>$request['TokenPush']
                    ]);
                    $usuarioE->save();
                }

                $usuario = User::where('id',$user->id)->with('padredefamilia',
                    "padredefamilia.padreestudiantes.estudiante",
                    "padredefamilia.padreestudiantes.estudiante.user",
                    "padredefamilia.padreestudiantes.estudiante.matriculas.gradoseccion.materiagrados.materium",
                    "padredefamilia.padreestudiantes.estudiante.matriculas.gradoseccion.grado",
                    "padredefamilia.padreestudiantes.estudiante.matriculas.gradoseccion.seccion",
                    "padredefamilia.padreestudiantes.estudiante.matriculas.gradoseccion.noticiasgrados.user",
                    "padredefamilia.padreestudiantes.estudiante.matriculas.gradoseccion.materiagrados.materiagradohorarios.diasdisponible"
                    ,"padredefamilia.padreestudiantes.estudiante.matriculas.gradoseccion.materiagrados.materiagradohorarios.horasdisponible")->get();
                return response()->json(['ErrorCode' => '0', 'token' => $token, 'usuario' => $usuario,
                ]);
            }else{
                return response()->json(['ErrorCode' => '2', 'msg' => 'Datos incorecctos']);
            }



        } catch (JWTException $e) {
            return response()->json(['ErrorCode' => '3', 'msg' => 'Error en ejecución de servicio de web']);

        }
    }

}

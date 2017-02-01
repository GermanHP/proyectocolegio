<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Api extends Controller
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

            if ($user->idTipousuario==2){

                return response()->json(['ErrorCode' => '0', 'user' => $user, 'info'=>$user->padredefamilia[0]->estudiantes]);
            }
        } catch (JWTException $e) {
            return response()->json(['ErrorCode' => '3', 'msg' => 'Error en ejecución de servicio de web']);


        }
    }
}
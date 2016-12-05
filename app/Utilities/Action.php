<?php


namespace App\Utilities;

use App\Models\Cliente;
use App\Models\Ordene;
use Asachanfbd\LaravelPushNotification\PushNotification;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Hash;
use Snowfire\Beautymail\Beautymail;

class Action
{

    public function makePassword()   {


        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
        $numerodeletras = 8; //numero de letras para generar el texto
        $cadena = ""; //variable para almacenar la cadena generada
        for ($i = 0; $i < $numerodeletras; $i++) {
            $cadena .= substr($caracteres, rand(0, strlen($caracteres)), 1);
        }
        return $cadena;
    }

    public function generarCarnet($nombres, $apellidos){
        $carnet = 'DP100113';
        $caracteres = "1234567890"; //posibles caracteres a usar
        $numerodeletras = 6; //numero de letras para generar el texto
        $cadena = ""; //variable para almacenar la cadena generada
        for ($i = 0; $i < $numerodeletras; $i++) {
            $cadena .= substr($caracteres, rand(0, strlen($caracteres)), 1);
        }
        $carnet = substr($nombres,0,1).substr($apellidos,0,1).$cadena;
        return $carnet;
    }
    /*public function sendEmail($data, $email, $tema, $subject, $page)
    {
        try {
        $beautymail = app()->make(Beautymail::class);
        $beautymail->send($page, $data, function ($message) use ($email, $tema, $subject) {

            $message->from('todocyber100@gmail.com', $tema);

            $message->to($email)->subject($subject);

        });
        } catch (\Exception $e) {
            
        }


    }*/

    public function killSession($idUser)
    {
        DB::table("sessions")->where("user_id", $idUser)
            ->delete();
    }

    public function killAllSessionsHouse($users)
    {

        DB::table("sessions")->whereIn("user_id", $users)->delete();
    }




}
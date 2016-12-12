<?php
/**
 * Created by PhpStorm.
 * User: eacampos01
 * Date: 30/11/16
 * Time: 14:12
 */

namespace App\Utilities;


use GuzzleHttp;

class MoodleEngine
{

    const Domain = "http://localhost/";
    const RestFormat = "json";
    const UserName = "admin";
    const Password = 'Pa$$w0rd';


    private  $guzzle;
    private $token="";

    public function __construct()
    {
        $this->guzzle =new GuzzleHttp\Client();

    }

    private function getTokenMoodle(){
        $token = "";
        $res = GuzzleHttp\json_decode($this->guzzle->request('GET', self::Domain.'moodle/login/token.php?username='.self::UserName.'&password='.self::Password.'&service=User')->getBody());
        if ($res->token){

            $token = $res->token;

        }

        return $token;



    }


    private function ConsumeMoodleService($functionName, $method,$body){

        var_dump(json_encode($body));
        $res = GuzzleHttp\json_decode($this->guzzle->request($method, self::Domain.'moodle/webservice/rest/server.php'. '?wstoken=' . 'f8a7c7af260702a7d41c0ad473a927a4' . '&wsfunction='.$functionName.'&moodlewsrestformat='.self::RestFormat,
            [
                'headers'=> ["Content-Type:"=>"text/plain"],
                'form_params'    => $body

            ])->getBody());

        var_dump(json_encode($res));

        return $res;


    }

    public function addStudent($user){



        $userMoodle = [];
        $userMoodle["username"] = $user->estudiantes->carnet;
        $userMoodle["password"]= $user->estudiantes->carnet.$user->nombre;
        $userMoodle["firstname"] =$user->nombre;
        $userMoodle["lastname"] =$user->apellido;
        $userMoodle["email"] = "test@test.com";
        $userMoodle["calendartype"] = "gregorian";
        $userMoodle["auth"] = "manual";
        $userMoodle["idnumber"] =$user->estudiantes->carnet;
        $userMoodle["lang"] ="es_mx";
        $userMoodle["description"] = "Estudiante colegio San Juan Bautista";
        $userMoodle["city"] = "El Salvador";
        $userMoodle["country"] = "Olocuilta";

      //  var_dump(json_encode($userMoodle));

       $responseStudent = $this->ConsumeMoodleService("core_user_create_users","POST",["users"=>[$userMoodle]]);

/*

        if (isset($responseStudent->id)){

           return $this->createRole($responseStudent->id,5);

        }*/

    }


    private function createRole($idUserMoodle,$roleId){
        $role = new \stdClass();
        $role->roleid = $roleId;
        $role->userid = $idUserMoodle;


        $responseRole = $this->ConsumeMoodleService("core_role_assign_roles","POST",["assignments"=>[$role]]);



    }

    


}
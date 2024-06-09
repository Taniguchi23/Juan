<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;
use Response;

class EmailController extends Controller
{
    public function EnviarEmail (Request $request){
        $response = 'ok';
        $vistaDatos = 'email.index';
        $asunto = 'Nueva solicitud';
        $remitente = 'INNOVA TECH';
        $email = [
            'title' => 'Solicitud de Servicios',
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'servicio' => $request->servicio,
            'empresa' => $request->empresa,
            'ruc' => $request->ruc,
            'mensaje' => $request->mensaje,
        ];
        $cantidad = env("INNOVA_MAIL_CANTIDAD");
        for ($i=0; $i < $cantidad; $i++) {
            $temp = env("INNOVA_MAIL_TO".($i+1));
            Mail::to($temp)->send(new SendEmail($email,$vistaDatos,$asunto, $remitente));
        }
    return Response::json($response);
    }
}

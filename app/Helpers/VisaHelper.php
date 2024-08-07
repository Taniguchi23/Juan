<?php

namespace App\Helpers;

class VisaHelper
{
    const VISA_DEVELOPMENT = true; //constante para el modo de desarrollo

    // Desarrollo Visa  || constantes para las credenciales y URLs de desarrollo
    const VISA_DEV_MERCHANT_ID = '456879852';
    const VISA_DEV_USER = 'integraciones@niubiz.com.pe';
    const VISA_DEV_PWD = '_7z3@8fF';
    const VISA_DEV_URL_SECURITY = 'https://apisandbox.vnforappstest.com/api.security/v1/security';
    const VISA_DEV_URL_SESSION = 'https://apisandbox.vnforappstest.com/api.ecommerce/v2/ecommerce/token/session/'.self::VISA_DEV_MERCHANT_ID;
    const VISA_DEV_URL_JS = 'https://static-content-qas.vnforapps.com/v2/js/checkout.js?qa=true';
    const VISA_DEV_URL_AUTHORIZATION = 'https://apisandbox.vnforappstest.com/api.authorization/v3/authorization/ecommerce/'.self::VISA_DEV_MERCHANT_ID;

    // Producción Visa  || constantes para las credenciales y URLs de produccion
    const VISA_PRD_MERCHANT_ID = '527127703';
    const VISA_PRD_USER = 'integraciones.visanet@necomplus.com';
    const VISA_PRD_PWD = 'd5e7nk$M';
    const VISA_PRD_URL_SECURITY = 'https://apiprod.vnforapps.com/api.security/v1/security';
    const VISA_PRD_URL_SESSION = 'https://apiprod.vnforapps.com/api.ecommerce/v2/ecommerce/token/session/'.self::VISA_PRD_MERCHANT_ID;
    const VISA_PRD_URL_JS = 'https://static-content.vnforapps.com/v2/js/checkout.js';
    const VISA_PRD_URL_AUTHORIZATION = 'https://apiprod.vnforapps.com/api.authorization/v3/authorization/ecommerce/'.self::VISA_PRD_MERCHANT_ID;

    // Configuración visa || configuracion dinamica basada en el nodo 
    const VISA_MERCHANT_ID = self::VISA_DEVELOPMENT ? self::VISA_DEV_MERCHANT_ID : self::VISA_PRD_MERCHANT_ID;
    const VISA_USER = self::VISA_DEVELOPMENT ? self::VISA_DEV_USER : self::VISA_PRD_USER;
    const VISA_PWD = self::VISA_DEVELOPMENT ? self::VISA_DEV_PWD : self::VISA_PRD_PWD;
    const VISA_URL_SECURITY = self::VISA_DEVELOPMENT ? self::VISA_DEV_URL_SECURITY : self::VISA_PRD_URL_SECURITY;
    const VISA_URL_SESSION = self::VISA_DEVELOPMENT ? self::VISA_DEV_URL_SESSION : self::VISA_PRD_URL_SESSION;
    const VISA_URL_JS = self::VISA_DEVELOPMENT ? self::VISA_DEV_URL_JS : self::VISA_PRD_URL_JS;
    const VISA_URL_AUTHORIZATION = self::VISA_DEVELOPMENT ? self::VISA_DEV_URL_AUTHORIZATION : self::VISA_PRD_URL_AUTHORIZATION;

    public static function generateToken()
    {
        $curl = curl_init(); //inicia una nueva session
        curl_setopt_array($curl, array(
            CURLOPT_URL => self::VISA_URL_SECURITY,
            CURLOPT_RETURNTRANSFER => true, //devuelve una cadena de texto llamada curl_Exec
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, //version del protocolo HTTP
            CURLOPT_CUSTOMREQUEST => "POST", //se usa para la solicitud
            CURLOPT_HTTPHEADER => array( //incluye la autorizacion en base64
                "Accept: */*",
                'Authorization: '.'Basic '.base64_encode(self::VISA_USER.":".self::VISA_PWD)
            ),
        ));
        $response = curl_exec($curl); //ejecuta la solicitud
        curl_close($curl); //cierra la sesion cURL
        return $response; //devuelve la respuesta del API de seguridad de VISA
    }

    public static function generateSession($amount, $token)
    { //se define los datos necesarios para la sesion de pago
        $session = array(
            'amount' => $amount, //monto de la transaccion
            'antifraud' => array( //define la informacion antifraude como la IP del cliente y datos especificos
                'clientIp' => $_SERVER['REMOTE_ADDR'],
                'merchantDefineData' => array(
                    'MDD15' => "Valor MDD 15",
                    'MDD20' => "Valor MDD 20",
                    'MDD33' => 'Valor MDD 30'
                ),
            ),
            'channel' => 'web', //canal de la transaccion
        );
        $json = json_encode($session); //convierte el array de la sesion en un JSON
        $response = json_decode(self::postRequest(self::VISA_URL_SESSION,$json, $token)); //envia la solicitud POST con los datos de sesion y el token de seguridad  
        //convirte la respuesta JSON en un objeto PHP
        return $response->sessionKey;
    }

    public static function generateAuthorization($amount, $purchaseNumber, $transactionToken, $token)
    {
        $data = array( //se genera los datos necesacios para la autoriazacion de pagos
            'antifraud' => null, //informacion antifraude, en este caso null
            'captureType' => 'manual', //tipo de captura
            'channel' => 'web', //canal de transaccion
            'countable' => true, //indica si la transaccion es contable
            'order' => array( //informacion de la orden como el monto,moneda,numero de compra y token de transaccion
                'amount' => $amount,
                'currency' => 'PEN',
                'purchaseNumber' => $purchaseNumber,
                'tokenId' => $transactionToken
            ),
            'recurrence' => null,//informacion de recurrencia
            'sponsored' => null
        );
        $json = json_encode($data);//convierte el array obtenido en un JSON
        $session = json_decode(self::postRequest(self::VISA_URL_AUTHORIZATION, $json, $token));//envia la solicitud POST con los datos y el token de seguridad
        return $session; //devuelve la respuesta de autorizacion de pago
    }

    private static function postRequest($url, $postData, $token)
    {
        $curl = curl_init(); //inicia una nueva sesion cURL
        curl_setopt_array($curl, array( //se establece un array de opciones para la transferencia
            CURLOPT_URL => $url, //url del endpoint
            CURLOPT_RETURNTRANSFER => true, //si es true devuelve en una cadena de texto llamada curl_exec
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, //usa la version 1.1 del protocolo HTTP
            CURLOPT_CUSTOMREQUEST => "POST", //el metodo que se usa para la solicitud es POST
            CURLOPT_HTTPHEADER => array(//cabecera http que se incluiran en la solicitud 
                'Authorization: '.$token,
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => $postData //son los datos a enviar en la solicitud POST
        ));
        $response = curl_exec($curl); //ejecuta la solicitud cURL
        curl_close($curl); //cierra la sesion cURL
        return $response;
    }

    public static function generatePurchaseNumber() //genera un numero de compra unico usando el tiempo y un numero aleatorio
    {
        $purchaseNumber = time() . mt_rand(10, 99);
        return $purchaseNumber;
    }
}

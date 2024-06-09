<?php

namespace App\Helpers;

class VisaHelper
{
    const VISA_DEVELOPMENT = true;

    // Desarrollo Visa
    const VISA_DEV_MERCHANT_ID = '456879852';
    const VISA_DEV_USER = 'integraciones@niubiz.com.pe';
    const VISA_DEV_PWD = '_7z3@8fF';
    const VISA_DEV_URL_SECURITY = 'https://apisandbox.vnforappstest.com/api.security/v1/security';
    const VISA_DEV_URL_SESSION = 'https://apisandbox.vnforappstest.com/api.ecommerce/v2/ecommerce/token/session/'.self::VISA_DEV_MERCHANT_ID;
    const VISA_DEV_URL_JS = 'https://static-content-qas.vnforapps.com/v2/js/checkout.js?qa=true';
    const VISA_DEV_URL_AUTHORIZATION = 'https://apisandbox.vnforappstest.com/api.authorization/v3/authorization/ecommerce/'.self::VISA_DEV_MERCHANT_ID;

    // Producción Visa
    const VISA_PRD_MERCHANT_ID = '527127703';
    const VISA_PRD_USER = 'integraciones.visanet@necomplus.com';
    const VISA_PRD_PWD = 'd5e7nk$M';
    const VISA_PRD_URL_SECURITY = 'https://apiprod.vnforapps.com/api.security/v1/security';
    const VISA_PRD_URL_SESSION = 'https://apiprod.vnforapps.com/api.ecommerce/v2/ecommerce/token/session/'.self::VISA_PRD_MERCHANT_ID;
    const VISA_PRD_URL_JS = 'https://static-content.vnforapps.com/v2/js/checkout.js';
    const VISA_PRD_URL_AUTHORIZATION = 'https://apiprod.vnforapps.com/api.authorization/v3/authorization/ecommerce/'.self::VISA_PRD_MERCHANT_ID;

    // Configuración visa
    const VISA_MERCHANT_ID = self::VISA_DEVELOPMENT ? self::VISA_DEV_MERCHANT_ID : self::VISA_PRD_MERCHANT_ID;
    const VISA_USER = self::VISA_DEVELOPMENT ? self::VISA_DEV_USER : self::VISA_PRD_USER;
    const VISA_PWD = self::VISA_DEVELOPMENT ? self::VISA_DEV_PWD : self::VISA_PRD_PWD;
    const VISA_URL_SECURITY = self::VISA_DEVELOPMENT ? self::VISA_DEV_URL_SECURITY : self::VISA_PRD_URL_SECURITY;
    const VISA_URL_SESSION = self::VISA_DEVELOPMENT ? self::VISA_DEV_URL_SESSION : self::VISA_PRD_URL_SESSION;
    const VISA_URL_JS = self::VISA_DEVELOPMENT ? self::VISA_DEV_URL_JS : self::VISA_PRD_URL_JS;
    const VISA_URL_AUTHORIZATION = self::VISA_DEVELOPMENT ? self::VISA_DEV_URL_AUTHORIZATION : self::VISA_PRD_URL_AUTHORIZATION;

    public static function generateToken()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => self::VISA_URL_SECURITY,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                'Authorization: '.'Basic '.base64_encode(self::VISA_USER.":".self::VISA_PWD)
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public static function generateSession($amount, $token)
    {
        $session = array(
            'amount' => $amount,
            'antifraud' => array(
                'clientIp' => $_SERVER['REMOTE_ADDR'],
                'merchantDefineData' => array(
                    'MDD15' => "Valor MDD 15",
                    'MDD20' => "Valor MDD 20",
                    'MDD33' => 'Valor MDD 30'
                ),
            ),
            'channel' => 'web',
        );
        $json = json_encode($session);
        $response = json_decode(self::postRequest(self::VISA_URL_SESSION,$json, $token));
        return $response->sessionKey;
    }

    public static function generateAuthorization($amount, $purchaseNumber, $transactionToken, $token)
    {
        $data = array(
            'antifraud' => null,
            'captureType' => 'manual',
            'channel' => 'web',
            'countable' => true,
            'order' => array(
                'amount' => $amount,
                'currency' => 'PEN',
                'purchaseNumber' => $purchaseNumber,
                'tokenId' => $transactionToken
            ),
            'recurrence' => null,
            'sponsored' => null
        );
        $json = json_encode($data);
        $session = json_decode(self::postRequest(self::VISA_URL_AUTHORIZATION, $json, $token));
        return $session;
    }

    private static function postRequest($url, $postData, $token)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.$token,
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => $postData
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

    public static function generatePurchaseNumber()
    {
        $purchaseNumber = time() . mt_rand(10, 99);
        return $purchaseNumber;
    }
}

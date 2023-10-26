<?php

namespace App\Http;

class Request implements RequestInterface
{
    /**
     * @var string
     */
    private string $url = '';

    /**
     * @var string
     */
    private string $clientPass = '';

    /**
     * @param $payerEmail
     * @param $cardNumber
     * @return string
     */
    public function calculateHash($payerEmail, $cardNumber): string
    {
        return md5(
            strtoupper(
                strrev($payerEmail) .
                $this->clientPass .
                strrev(substr( $cardNumber, 0, 6) .
                substr( $cardNumber, -4))
            )
        );
    }

    /**
     * @param string $url
     * @param $clientPass
     */
    public function __construct(string $url, $clientPass)
    {
        $this->url = $url;
        $this->clientPass = $clientPass;
    }

    /**
     * @param array $params
     * @return string
     */
    public function sendRequest(array $params): string
    {
        $data = [];

        if ($params['action'] == 'SALE')
        {
            $hash = $this->calculateHash($params['payer_email'], $params['card_number']);
            $params += ['hash' => $hash];

            $curlSession = curl_init();

            curl_setopt($curlSession, CURLOPT_URL, $this->url);
            curl_setopt($curlSession, CURLOPT_POST, 1);
            curl_setopt($curlSession, CURLOPT_POSTFIELDS, http_build_query($params));

            curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

            $data = curl_exec($curlSession);

            curl_close($curlSession);
        }

        if ($data !== false)
        {
            return $data;
        }
        else
        {
            return json_encode(['result' => 'ERROR']);
        }
    }
}
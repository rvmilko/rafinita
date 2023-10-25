<?php

namespace App\Http;

class Client
{
    /**
     * @param $params
     * @param $url
     * @param $clientPass
     * @return array
     */
    public function request($params, $url, $clientPass): array
    {
        $request = new Request($url, $clientPass);
        $requestResult = $request->sendRequest($params);

        $response = new Response();
        return $response->getResponse($requestResult);
    }
}
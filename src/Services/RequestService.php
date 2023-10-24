<?php

namespace App\Services;

use App\Models\Response;
use App\Models\Sale;

class RequestService
{
    const CLIENT_PASS = 'd0ec0beca8a3c30652746925d5380cf3';
    public function getResponse(Sale $sale): Response
    {
        $hash = md5(strtoupper(strrev($sale->getPayerEmail()) . RequestService::CLIENT_PASS . strrev(substr($sale->getCardNumber(),0,6) . substr($sale->getCardNumber(),-4))));

        $request = [
            'action' => $sale->getAction(),
            'client_key' => $sale->getClientKey(),
            'order_id' => $sale->getOrderId(),
            'order_amount' => $sale->getOrderAmount(),
            'order_currency' => $sale->getOrderCurrency(),
            'order_description' => $sale->getOrderDescription(),
            'card_number' => $sale->getCardNumber(),
            'card_exp_month' => $sale->getCardExpMonth(),
            'card_exp_year' => $sale->getCardExpYear(),
            'card_cvv2' => $sale->getCardCvv2(),
            'payer_first_name' => $sale->getPayerFirstName(),
            'payer_last_name' => $sale->getPayerLastName(),
            'payer_address' => $sale->getPayerAddress(),
            'payer_country' => $sale->getPayerCountry(),
            'payer_state' => $sale->getPayerState(),
            'payer_city' => $sale->getPayerCity(),
            'payer_zip' => $sale->getPayerZip(),
            'payer_email' => $sale->getPayerEmail(),
            'payer_phone' => $sale->getPayerPhone(),
            'payer_ip' => $sale->getPayerIp(),
            'term_url_3ds' => $sale->getTermUrl3ds(),
            'hash' => $hash
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,"https://dev-api.rafinita.com/post");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($request));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        $responseObj = new Response();

        if($response)
        {
            $result = json_decode($response, true);
            $responseObj->setValuesFromArray($result);
        }

        print_r($responseObj->getAllProperties());

        return $responseObj;
    }
}
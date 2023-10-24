<?php

require dirname(__DIR__).'/vendor/autoload.php';

use App\Models\Sale;

$sale = new Sale();
$sale->setAction('SALE');
$sale->setClientKey('5b6492f0-f8f5-11ea-976a-0242c0a85007');
$sale->setOrderId('ORDER-01234');
$sale->setOrderAmount(1.99);
$sale->setOrderCurrency('USD');
$sale->setOrderDescription('Product');
$sale->setCardNumber('4111111111111111');
$sale->setCardExpMonth('01');
$sale->setCardExpYear('2025');
$sale->setCardCvv2('2000');
$sale->setPayerFirstName('John');
$sale->setPayerLastName('Doe');
$sale->setPayerAddress('Big street');
$sale->setPayerCountry('US');
$sale->setPayerState('CA');
$sale->setPayerCity('City');
$sale->setPayerZip('123456');
$sale->setPayerEmail('doe@example.com');
$sale->setPayerPhone('199999999');
$sale->setPayerIp('123.123.123.123');
$sale->setTermUrl3ds('http://client.site.com/return.php');
//$sale->setHash('a1a6de416405ada72bb47a49176471dc');

// оставить по вот эту строку





// перенести в реквестсервайс
const CLIENT_PASS = "d0ec0beca8a3c30652746925d5380cf3";

$hash = md5(strtoupper(strrev($sale->getPayerEmail()) . CLIENT_PASS . strrev(substr($sale->getCardNumber(),0,6) . substr($sale->getCardNumber(),-4))));




$requestService = new \App\Services\RequestService();

// $response = $requestService->getResponse($sale);

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

$server_output = curl_exec($ch);

curl_close($ch);

echo $server_output;
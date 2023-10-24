<?php

require dirname(__DIR__).'/vendor/autoload.php';

use App\Models\Sale;
use App\Services\RequestService;

$sale = new Sale();

$sale->setAction('SALE');
$sale->setClientKey('5b6492f0-f8f5-11ea-976a-0242c0a85007');
$sale->setOrderId('ORDER-005522420');
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

$requestService = new RequestService();

$response = $requestService->getResponse($sale);
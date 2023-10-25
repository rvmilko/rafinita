<?php

use App\Http\Client;

require dirname(__DIR__) . '/vendor/autoload.php';


$url = 'https://dev-api.rafinita.com/post';
$clientPass = 'd0ec0beca8a3c30652746925d5380cf3';

// Getting params from Form for example
$params = [
    'action' => 'SALE',
    'client_key' => '5b6492f0-f8f5-11ea-976a-0242c0a85007',
    'order_id' => 'ORDER-0055224204',
    'order_amount' => '1.99',
    'order_currency' => 'USD',
    'order_description' => 'Product',
    'card_number' => '4111111111111111',
    'card_exp_month' => '01',
    'card_exp_year' => '2025',
    'card_cvv2' => '2000',
    'payer_first_name' => 'John',
    'payer_last_name' => 'Doe',
    'payer_address' => 'Big street',
    'payer_country' => 'US',
    'payer_state' => 'CA',
    'payer_city' => 'City',
    'payer_zip' => '123456',
    'payer_email' => 'doe@example.com',
    'payer_phone' => '199999999',
    'payer_ip' => '123.123.123.123',
    'term_url_3ds' => 'https://client.site.com/return.php',
];

$client = new Client();
$data = $client->request($params, $url, $clientPass);

print_r ($data);
<?php

namespace App\Http;

interface RequestInterface
{
    /**
     * @param array $params
     * @return string
     */
    public function sendRequest(array $params): string;

    /**
     * @param $payerEmail
     * @param $cardNumber
     * @return string
     */
    public function calculateHash($payerEmail, $cardNumber): string;
}

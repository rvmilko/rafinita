<?php

namespace App\Http;

interface RequestInterface
{
    /**
     * @param array $params
     * @return string
     */
    public function sendRequest(array $params): string;
}

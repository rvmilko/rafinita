<?php

namespace App\Http;

interface ResponseInterface
{
    /**
     * @param string $data
     * @return array
     */
    public function getResponse(string $data): array;
}

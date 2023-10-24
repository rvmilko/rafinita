<?php

namespace App\Services;

use App\Models\Response;
use App\Models\Sale;

class RequestService
{
    public function getResponse(Sale $sale): Response
    {
        // this operation with curl
        // return Response object
    }
}
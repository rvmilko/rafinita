<?php

namespace App\Http;

class Response implements ResponseInterface
{
    /**
     * @param string $data
     * @return array
     */
    public function getResponse(string $data): array
    {
        $result = [];

        if ($data) {
            $result = json_decode($data, true);
        }

        if ($result['result'] == 'ERROR') {
            // TODO : implement some logic
            return $result;
        } else {
            if ($result['action'] == 'SALE') {
                if ($result['result'] == 'SUCCESS') {
                    // TODO : implement some logic
                    return $result;
                }
                if ($result['result'] == 'DECLINED') {
                    // TODO : implement some logic
                    return $result;
                }
                if ($result['result'] == 'REDIRECT') {
                    // TODO : implement some logic
                    return $result;
                }
            }
        }
        return $result;
    }
}
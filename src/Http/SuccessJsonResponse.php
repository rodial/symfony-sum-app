<?php

namespace App\Http;

use Symfony\Component\HttpFoundation\JsonResponse;


class SuccessJsonResponse extends JsonResponse
{
    public function __construct($data = null, int $status = 200, array $headers = [], bool $json = false)
    {
        $data = [
            'data' => $data,
        ];

        parent::__construct($data, $status, $headers, $json);
    }
}
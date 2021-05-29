<?php

namespace App\Http\Resources;

use OpenApi\Annotations as OA;


class SumResultResource
{
    /**
     * @var int|float
     * @OA\Property(
     *     property="result",
     *     type="number",
     *     example=5,
     * ),
     */
    public $result;


    public function __construct(float $result)
    {
        $this->result = $result;
    }
}
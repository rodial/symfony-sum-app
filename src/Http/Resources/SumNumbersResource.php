<?php

namespace App\Http\Resources;

use OpenApi\Annotations as OA;
use Symfony\Component\Validator\Constraints as Assert;


class SumNumbersResource
{
    /**
     * @OA\Property(
     *     property="number1",
     *     type="number",
     *     example=3,
     * ),
     * @Assert\NotBlank
     * @Assert\Type("numeric")
     */
    public $number1;

    /**
     * @OA\Property(
     *     property="number2",
     *     type="number",
     *     example=2,
     * ),
     * @Assert\NotBlank
     * @Assert\Type("numeric")
     */
    public $number2;
}
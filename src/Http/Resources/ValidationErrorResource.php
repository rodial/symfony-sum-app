<?php

namespace App\Http\Resources;

use OpenApi\Annotations as OA;
use Symfony\Component\Validator\ConstraintViolationInterface;


class ValidationErrorResource
{
    /**
     * @OA\Property(
     *     property="message",
     *     type="string",
     *     example="This value should be of type numeric.",
     * ),
     */
    public string $message;

    /**
     * @OA\Property(
     *     property="path",
     *     type="string",
     *     example="number1",
     * ),
     */
    public string $path;


    public function __construct(ConstraintViolationInterface $violation)
    {
        $this->message = $violation->getMessage();
        $this->path = $violation->getPropertyPath();
    }
}
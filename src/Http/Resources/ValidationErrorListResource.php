<?php

namespace App\Http\Resources;

use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Annotations as OA;
use Symfony\Component\Validator\ConstraintViolationInterface;
use Symfony\Component\Validator\ConstraintViolationListInterface;


class ValidationErrorListResource
{
    /**
     * @OA\Property(
     *     property="errors",
     *     type="array",
     *     @OA\Items(ref=@Model(type=ValidationErrorResource::class)),
     * ),
     */
    public $errors;


    public function __construct(ConstraintViolationListInterface $violations)
    {
        $this->errors = [];
        /** @var ConstraintViolationInterface $violation */
        foreach ($violations as $violation) {
            $this->errors[] = new ValidationErrorResource($violation);
        }
    }
}
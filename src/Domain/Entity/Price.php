<?php
namespace Domain\Entity;

use Domain\Validator\Validator;
use Domain\Validator\VeryHighPriceValidator;
use Domain\Validator\NegativeNumberValidator;
use Domain\Core\NumberObject;

class Price extends NumberObject
{
    private float $price;

    public function __construct(float $price)
    {
        $validator = new Validator([
            new VeryHighValidator(1000),
            new NegativeValidator(),
        ]);

        $this->price = $price;
    }

    public function getValue(): mixed
    {
        return $this->price;
    }
}

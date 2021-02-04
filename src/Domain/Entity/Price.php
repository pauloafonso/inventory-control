<?php
namespace Domain\Entity;

use Domain\Validator\Validator;
use Domain\Validator\VeryHighPriceValidator;
use Domain\Validator\NegativePriceValidator;

class Price implements ValueObjectInterface
{
    private float $price;

    public function __construct(float $price)
    {
        $validator = new Validator([
            new VeryHighPriceValidator(),
            new NegativePriceValidator(),
        ]);
        $validator->validate($price);

        $this->price = $price;
    }

    public function getValue(): float
    {
        return $this->price;
    }
}

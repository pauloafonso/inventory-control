<?php
namespace App\Domain\Entity;

use App\Domain\Validator\Validator;
use App\Domain\Validator\VeryHighPriceValidator;
use App\Domain\Validator\NegativePriceValidator;

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

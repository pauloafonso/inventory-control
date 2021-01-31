<?php
namespace App\Domain;

use App\Domain\Validators\Validator;
use App\Domain\Validators\VeryHighPriceValidator;
use App\Domain\Validators\NegativePriceValidator;

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

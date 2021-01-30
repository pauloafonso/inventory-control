<?php
namespace App\Domain;

use App\Domain\Validator;
use App\Domain\Validators\VeryHighPriceValidator;
use App\Domain\Validators\NegativePriceValidator;

class Price
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
}

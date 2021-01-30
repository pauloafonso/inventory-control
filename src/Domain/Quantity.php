<?php
namespace App\Domain;

use App\Domain\Validator;
use App\Domain\Validators\VeryHighQuantityValidator;
use App\Domain\Validators\NegativeQuantityValidator;

class Quantity
{
    private float $quantity;

    public function __construct(float $quantity)
    {
        $validator = new Validator([
            new VeryHighQuantityValidator(),
            new NegativeQuantityValidator(),
        ]);
        $validator->validate($quantity);

        $this->quantity = $quantity;
    }
}

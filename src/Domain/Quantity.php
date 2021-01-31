<?php
namespace App\Domain;

use App\Domain\Validators\Validator;
use App\Domain\Validators\VeryHighQuantityValidator;
use App\Domain\Validators\NegativeQuantityValidator;

class Quantity implements ValueObjectInterface
{
    private int $quantity;

    public function __construct(int $quantity)
    {
        $validator = new Validator([
            new VeryHighQuantityValidator(),
            new NegativeQuantityValidator(),
        ]);
        $validator->validate($quantity);

        $this->quantity = $quantity;
    }

    public function getValue(): int
    {
        return $this->quantity;
    }
}

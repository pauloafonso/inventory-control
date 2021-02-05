<?php
namespace Domain\Entity;

use Domain\Validator\Validator;
use Domain\Validator\VeryHighQuantityValidator;
use Domain\Validator\NegativeQuantityValidator;
use Domain\Core\NumberObject;

class Quantity extends NumberObject
{
    private int $quantity;

    public function __construct(int $quantity)
    {
        $validator = new Validator([
            new VeryHighValidator(100),
            new NegativeValidator(),
        ]);
        $validator->validate($quantity);

        $this->quantity = $quantity;
    }

    public function getValue(): int
    {
        return $this->quantity;
    }
}

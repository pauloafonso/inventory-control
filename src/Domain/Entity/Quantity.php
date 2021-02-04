<?php
namespace Domain\Entity;

use Domain\Validator\Validator;
use Domain\Validator\VeryHighQuantityValidator;
use Domain\Validator\NegativeQuantityValidator;

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

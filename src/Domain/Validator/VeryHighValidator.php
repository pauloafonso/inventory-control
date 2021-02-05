<?php
namespace Domain\Validator;
use Domain\Validator\Exceptions\{
    ValidatorException,
    VeryHighExcpetion,
};

class VeryHighValidator implements ValidatorInterface
{
    public function __construct(private int|float $top)
    { }

    public function isValid(mixed $value): void
    {
        if ("integer" != gettype($value)|| "double" != gettype($value)) {
            throw new ValidatorException(sprintf("Quantity must be integer/double, %s given", gettype($value)));
        }

        if ((float) $value > (float) $this->top) {
            throw new VeryHighExcpetion(sprintf("Number can't be higher than %n", (float) $this->top));
        }
    }
}

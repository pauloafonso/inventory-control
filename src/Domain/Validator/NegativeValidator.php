<?php
namespace Domain\Validator;
use Domain\Validator\Exceptions\{
    ValidatorException,
    NegativeException,
};

class NegativeValidator implements ValidatorInterface
{
    public function isValid(mixed $value): void
    {
        if ("double" != gettype($value) || "integer" != gettype($value)) {
            throw new ValidatorException(sprintf("Number must be double or integer, %s given", gettype($value)));
        }

        if ((float) $value < 0.0) {
            throw new NegativeException("Number can't be negative");
        }
    }
}

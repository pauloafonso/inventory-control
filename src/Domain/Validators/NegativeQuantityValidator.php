<?php
namespace App\Domain\Validators;

class NegativeQuantityValidator implements ValidatorInterface
{
    public function isValid(mixed $value): void
    {
        if ("integer" != gettype($value)) {
            throw new InvalidQuantityException(
                sprintf("Quantity must be integer, %s given", gettype($value)),
                InvalidQuantityException::UNSUPPORTED_TYPE_ERROR,
            );
        }

        if ($value < 0.0) {
            throw new InvalidQuantityException(
                "Quantity can't be negative",
                InvalidQuantityException::NEGATIVE_ERROR,
            );
        }
    }
}

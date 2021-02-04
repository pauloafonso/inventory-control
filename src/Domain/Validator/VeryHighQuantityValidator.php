<?php
namespace Domain\Validator;

class VeryHighQuantityValidator implements ValidatorInterface
{
    public function isValid(mixed $value): void
    {
        if ("integer" != gettype($value)) {
            throw new InvalidQuantityException(
                sprintf("Quantity must be integer, %s given", gettype($value)),
                InvalidQuantityException::UNSUPPORTED_TYPE_ERROR,
            );
        }

        if ($value > 100000) {
            throw new InvalidQuantityException(
                "Quantity value cannot be greater than 100.000",
                InvalidQuantityException::VERY_HIGH_QUANTITY_ERROR
            );
        }
    }
}

<?php
namespace App\Domain\Validators;

class VeryHighPriceValidator implements ValidatorInterface
{
    public function isValid(mixed $value): void
    {
        if ("double" != gettype($value)) {
            throw new InvalidPriceException(
                sprintf("Price must be double/float, %s given", gettype($value)),
                InvalidPriceException::UNSUPPORTED_TYPE_ERROR,
            );
        }

        if ($value > 100000.00) {
            throw new InvalidPriceException(
                "Price value cannot be greater than 100.000",
                InvalidPriceException::VERY_HIGH_PRICE_ERROR
            );
        }
    }
}

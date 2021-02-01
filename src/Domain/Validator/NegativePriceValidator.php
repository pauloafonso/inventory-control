<?php
namespace App\Domain\Validator;

class NegativePriceValidator implements ValidatorInterface
{
    public function isValid(mixed $value): void
    {
        if ("double" != gettype($value)) {
            throw new InvalidPriceException(
                sprintf("Price must be double/float, %s given", gettype($value)),
                InvalidPriceException::UNSUPPORTED_TYPE_ERROR,
            );
        }

        if ($value < 0.0) {
            throw new InvalidPriceException(
                "Price can't be negative",
                InvalidPriceException::NEGATIVE_ERROR,
            );
        }
    }
}

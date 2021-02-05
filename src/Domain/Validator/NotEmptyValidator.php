<?php
namespace Domain\Validator;
use Domain\Validator\Exceptions\{
    ValidatorException,
    NotEmptyException,
};

class NotEmptyValidator implements ValidatorInterface
{
    public function isValid(mixed $value): void
    {
        if (empty($value) || "" === $value) {
            throw new NotEmptyException("Value can't be empty / unfilled");
        }
    }
}

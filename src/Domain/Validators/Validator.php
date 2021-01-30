<?php
namespace App\Domain\Validators;

class Validator
{
    public function __construct(
        private array $validators,
    ) { }

    public function validate(mixed $value): void
    {
        foreach ($this->validators as $validator) {
            if (!$validator instanceof ValidatorInterface) {
                throw new \Exception("Validator Class must be instance of ValidatorInterface");
            }
            $validator->isValid($value);
        }
    }
}

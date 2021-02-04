<?php
namespace Domain\Validator;

class Validator
{
    public function __construct(
        private array $Validator,
    ) { }

    public function validate(mixed $value): void
    {
        foreach ($this->Validator as $validator) {
            if (!$validator instanceof ValidatorInterface) {
                throw new \Exception("Validator Class must be instance of ValidatorInterface");
            }
            $validator->isValid($value);
        }
    }
}

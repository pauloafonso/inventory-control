<?php
namespace Domain\Validator;

class Validator
{
    public function __construct(private array $validator)
    { }

    public function validate(mixed $value): void
    {
        foreach ($this->validator as $validator) {
            if (!$validator instanceof ValidatorInterface) {
                throw new \Exception("Validator Class must be instance of ValidatorInterface");
            }
            if (!$validator->isValid($value)) {

            }
        }
    }
}

<?php
namespace Domain\Validator;

interface ValidatorInterface
{
    public function isValid(mixed $value): void;
}

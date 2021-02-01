<?php
namespace App\Domain\Validator;

interface ValidatorInterface
{
    public function isValid(mixed $value): void;
}

<?php
namespace App\Domain\Validators;

interface ValidatorInterface
{
    public function isValid(mixed $value): void;
}

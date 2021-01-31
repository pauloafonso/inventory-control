<?php
namespace App\Domain;

interface ValueObjectInterface
{
    public function getValue(): int|float;
}

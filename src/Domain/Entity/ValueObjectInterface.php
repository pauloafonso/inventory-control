<?php
namespace App\Domain\Entity;

interface ValueObjectInterface
{
    public function getValue(): int|float;
}

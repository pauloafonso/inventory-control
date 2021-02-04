<?php
namespace Domain\Entity;

interface ValueObjectInterface
{
    public function getValue(): int|float;
}

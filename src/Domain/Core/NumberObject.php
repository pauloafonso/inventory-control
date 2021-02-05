<?php
namespace Domain\Core;

abstract class NumberObject extends ValueObject
{
    public function add(NumberObject $numberObject): NumberObject
    {
        if ($numberObject::class != $this::class) {
            throw new \Exception("It is not possible to add two different Value Object implementations");
        }
        return new ($this::class)($numberObject->getValue() + $this->getValue());
    }
}

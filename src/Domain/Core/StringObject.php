<?php
namespace Domain\Core;

abstract class StringObject extends ValueObject
{
    abstract public function getValue(): string;
}

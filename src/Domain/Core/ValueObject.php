<?php
namespace Domain\Core;

abstract class ValueObject
{
    abstract public function getValue(): mixed;
}

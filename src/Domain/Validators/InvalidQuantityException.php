<?php
namespace App\Domain\Validators;

class InvalidQuantityException extends \Exception
{
    public const UNSUPPORTED_TYPE_ERROR = 1;
    public const NEGATIVE_ERROR = 2;
    public const VERY_HIGH_QUANTITY_ERROR = 3;
}

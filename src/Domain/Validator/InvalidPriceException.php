<?php
namespace Domain\Validator;

class InvalidPriceException extends \Exception
{
    public const UNSUPPORTED_TYPE_ERROR = 1;
    public const NEGATIVE_ERROR = 2;
    public const VERY_HIGH_PRICE_ERROR = 3;
}

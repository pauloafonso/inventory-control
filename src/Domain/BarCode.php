<?php
namespace App\Domain;

class BarCode
{
    public const PREFIX = "VA";
    public const SEPARATION_CHAR = "_";

    public function __construct(private Product $product)
    { }

    public function generateBarCode(\DateTime $dateTime)
    {
        return sprintf(
            '%s%s%s%s%s',
            self::PREFIX,
            self::SEPARATION_CHAR,
            str_replace(" ", "", $this->product->getIdentificationCode()),
            self::SEPARATION_CHAR,
            $dateTime->format('dmYHis'),
        );
    }

    public function getProduct(): Product
    {
        return $this->product;
    }
}

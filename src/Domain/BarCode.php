<?php
namespace App\Domain;

class BarCode
{
    private Product $product;
    public const PREFIX = "VA";
    public const SEPARATION_CHAR = "_";

    public function __construct(Product $product)
    {
        if (is_null($product->getIdentificationCode())) {
            throw new \DomainException("Is required identification code to generate barCode");
        }
        $this->product = $product;
    }

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

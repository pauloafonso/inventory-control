<?php
namespace Domain\Entity;

class Product
{
    private ProductDescription $description;
    private ProductIdentificationCode $identificationCode;

    public function __construct(ProductDescription $description, ProductIdentificationCode $identificationCode)
    { }

    public function getIdentificationCode(): string
    {
        return $this->identificationCode;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}

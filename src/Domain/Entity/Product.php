<?php
namespace Domain\Entity;

class Product
{
    public function __construct(
        private ProductDescription $description,
        private ProductIdentificationCode $identificationCode,
    ) { }
}

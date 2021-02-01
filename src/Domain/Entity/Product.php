<?php
namespace App\Domain\Entity;

class Product
{
    public function __construct(
        private string $description,
        private string $identificationCode,
    ) { }

    public function getIdentificationCode(): string
    {
        return $this->identificationCode;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}

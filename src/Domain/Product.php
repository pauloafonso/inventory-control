<?php
namespace App\Domain;

class Product
{
    private string $description;
    private ?BarCode $barCode = null;
    private ?string $identificationCode = null;

    public function setDescription(string $description): Product
    {
        if (empty($description)) {
            throw new \InvalidArgumentException("product description cannot be empty");
        }
        $this->description = $description;

        return $this;
    }

    public function setIdentificationCode(string $identificationCode): Product
    {
        if (empty($identificationCode)) {
            throw new \InvalidArgumentException("product identification code cannot be empty");
        }
        $this->identificationCode = $identificationCode;

        return $this;
    }

    public function getIdentificationCode(): ?string
    {
        return $this->identificationCode;
    }

    public function createBarCode(): void
    {
        if (is_null($this->identificationCode)) {
            throw new \DomainException("Is required an identification code to generate the bar code");
        }
        $this->barCode = new BarCode($this);
    }

    public function getBarCode(): ?BarCode
    {
        return $this->barCode;
    }
}

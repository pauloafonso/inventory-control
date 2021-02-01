<?php
namespace App\Domain\Entity;

class Client
{
    public function __construct(private string $name)
    { }

    public function getName(): string
    {
        return $this->name;
    }    
}
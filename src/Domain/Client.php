<?php
namespace App\Domain;

class Client
{
    public function __construct(private string $name)
    { }

    public function getName(): string
    {
        return $this->name;
    }    
}

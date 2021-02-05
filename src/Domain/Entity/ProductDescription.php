<?php
namespace Domain\Entity;

use Domain\Core\StringObject;

class ProductDescription extends StringObject
{
    private string $productDescription;

    public function __construct(string $productDescription)
    {
        $validator = new Validator([
            new NotEmptyValidator(),
        ]);

        $this->productDescription = $productDescription;
    }

    public function getProductDescription(): string
    {
        return $this->productDescription;
    }
}

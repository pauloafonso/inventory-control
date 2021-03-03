<?php
namespace Domain\Entity;

use Domain\Core\StringObject;
use Domain\Validator\Validator;
use Domain\Validator\NotEmptyValidator;

class ProductDescription extends StringObject 
{
    private string $productDescription;

    public function __construct(string $productDescription)
    {
        $validator = new Validator([
            new NotEmptyValidator(),
        ]);
        $validator->validate($productDescription);

        $this->productDescription = $productDescription;
    }

    public function getValue(): string
    {
        return $this->productDescription;
    }
}

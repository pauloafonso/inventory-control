<?php
namespace Domain\Entity;

use Domain\Core\StringObject;

class ProductIdentificationCode extends StringObject
{
    private string $productIdentificationCode;

    public function __construct(string $productIdentificationCode)
    {
        $validator = new Validator([
            new NotEmptyValidator(),
        ]);

        $this->productIdentificationCode = $productIdentificationCode;
    }

    public function getProductIdentificationCode(): string
    {
        return $this->productIdentificationCode;
    }

}

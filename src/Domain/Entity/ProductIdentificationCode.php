<?php
namespace Domain\Entity;

use Domain\Core\StringObject;
use Domain\Validator\Validator;
use Domain\Validator\NotEmptyValidator;

class ProductIdentificationCode extends StringObject 
{
    private string $productIdentificationCode;

    public function __construct(string $productIdentificationCode)
    {
        $validator = new Validator([
            new NotEmptyValidator(),
        ]);
        $validator->validate($productIdentificationCode);

        $this->productIdentificationCode = $productIdentificationCode;
    }

    public function getValue(): string
    {
        return $this->productIdentificationCode;
    }

}

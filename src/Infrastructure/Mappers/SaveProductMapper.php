<?php
namespace Infrastructure\Mappers;

use Domain\Entity\{
    Product,
    ProductDescription,
    ProductIdentificationCode,
};

class SaveProductMapper
{
    public static function fromRequestToDomain(array $parsedBody): Product
    {
        self::validateRequest($parsedBody);

        return new Product(
            new ProductDescription($parsedBody['product_description']),
            new ProductIdentificationCode($parsedBody['product_identification_code'])
        );
    }

    private static function validateRequest(array $parsedBody): void
    {
        if (!isset($parsedBody['product_description'])) {
            throw new \Exception("Erro: deve ser informada uma descrição do produto");
        }
        if (!isset($parsedBody['product_identification_code'])) {
            throw new \Exception("Erro: deve ser informada uma identificação do produto");
        }
    }
}

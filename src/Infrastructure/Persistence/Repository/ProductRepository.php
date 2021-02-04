<?php
namespace Infrastructure\Persistence\Repository;

use Domain\RepositoryInterface\ProductRepositoryInterface;
use Domain\Entity\Product as DomainProduct;
use Infrastructure\Persistence\Models\Product as ModelProduct;

class ProductRepository implements ProductRepositoryInterface
{
    public function save(DomainProduct $domainProduct): bool
    {
        // $modelProduct = new ModelProduct();

        // $modelProduct
        //  ->setDescription($domainProduct->getDescription())
        //  ->setIdentificationCode($domainProduct->getIdentificationCode());
        return true;
    }
}

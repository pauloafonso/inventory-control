<?php
namespace App\Persistence\Repository;

use App\Domain\RepositoryInterface\ProductRepositoryInterface;
use App\Domain\Entity\Product as DomainProduct;
use App\Persistence\Models\Product as ModelProduct;

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

<?php
namespace Infrastructure\Persistence\Repository;

use Domain\RepositoryInterface\ProductRepositoryInterface;
use Domain\Entity\Product as DomainProduct;
use Infrastructure\Persistence\Models\Product as ModelProduct;

class ProductRepository implements ProductRepositoryInterface
{
    public function save(DomainProduct $domainProduct): void
    {
        // mysql persistence
        return;
    }
}

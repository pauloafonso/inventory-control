<?php
namespace Infrastructure\Persistence\Repository;

use Domain\RepositoryInterface\SaleRepositoryInterface;
use Domain\Entity\Sale as DomainSale;
use Infrastructure\Persistence\Models\Sale as ModelSale;
use Infrastructure\Persistence\Models\SaleItem as ModelSaleItem;

class SaleRepository implements SaleRepositoryInterface
{
    public function save(DomainSale $domainSale): bool
    {
    }
}

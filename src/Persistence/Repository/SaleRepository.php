<?php
namespace App\Persistence\Repository;

use App\Domain\RepositoryInterface\SaleRepositoryInterface;
use App\Domain\Entity\Sale as DomainSale;
use App\Persistence\Models\Sale as ModelSale;
use App\Persistence\Models\SaleItem as ModelSaleItem;

class SaleRepository implements SaleRepositoryInterface
{
    public function save(DomainSale $domainSale): bool
    {
    }
}

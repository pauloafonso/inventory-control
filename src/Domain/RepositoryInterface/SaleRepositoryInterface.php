<?php
namespace App\Domain\Entity;

interface SaleRepositoryInterface
{
    public function save(Sale $sale): bool;
}
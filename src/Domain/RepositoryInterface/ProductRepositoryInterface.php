<?php
namespace App\Domain\RepositoryInterface;

use App\Domain\Entity\Product;

interface ProductRepositoryInterface
{
    public function save(Product $product): bool;
}

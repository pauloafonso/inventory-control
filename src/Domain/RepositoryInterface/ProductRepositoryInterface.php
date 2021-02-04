<?php
namespace Domain\RepositoryInterface;

use Domain\Entity\Product;

interface ProductRepositoryInterface
{
    public function save(Product $product): bool;
}

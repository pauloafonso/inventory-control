<?php
namespace App\Domain;

class Sale
{
    private array $productPriceQuantities;

    public function addProductPriceQuantity(ProductPriceQuantity $productPriceQuantity): void
    {
        $this->productPriceQuantities[] = $productPriceQuantity;
    }
}

<?php
namespace App\Domain;

class Sale
{
    public function __construct(
        private array $saleItems = [],
        private float $totalPrice = 0.0,
        private float $totalQuantity = 0,
    )
    { }

    public function addSaleItem(SaleItem $saleItem): void
    {
        if ($this->productExists($saleItem->getProduct())) {
            throw new \DomainException(
                sprintf(
                    "There is already the %s product in this sale list.",
                    $product->getDescription(),
                )
            );
        }

        $this->saleItems[] = $saleItem;
        $this->totalPrice += $saleItem->getPrice()->getValue();
        $this->totalQuantity += $saleItem->getQuantity()->getValue();
    }

    private function productExists(Product $product)
    {
        foreach ($this->saleItems as $saleItem) {
            if ($saleItem->getProduct()->getIdentificationCode() == $product->getIdentificationCode()) {
                return true;
            }
        }
        return false;
    }

    public function getSaleItems()
    {
        return $this->saleItems;
    }

    public function getTotalPrice(): float
    {
        return $this->totalPrice;
    }

    public function getTotalQuantity(): float
    {
        return $this->totalQuantity;
    }
}

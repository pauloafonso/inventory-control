<?php
namespace App\Domain;

class ProductPriceQuantity
{
    public function __construct(
        private Product $product,
        private Price $price,
        private Quantity $quantity,
    );

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function getQuantity(): Quantity
    {
        return $this->quantity;
    }

}

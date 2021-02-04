<?php
namespace Application;

use Domain\RepositoryInterface\ProductRepositoryInterface;
use Domain\Entity\Product;

class SaveProduct implements UseCaseInterface
{
    public function __construct(private ProductRepositoryInterface $productRepository)
    { }

    public function save(string $description, string $identificationCode)
    {
        $product = new Product($description, $identificationCode);
        return $this->productRepository->save($product);
    }
}

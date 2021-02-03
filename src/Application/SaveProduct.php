<?php
namespace App\Application;

use App\Domain\RepositoryInterface\ProductRepositoryInterface;
use App\Domain\Entity\Product;

class SaveProduct implements UseCaseInterface
{
    public function __construct()
    { }

    public function __invoke(string $description, string $identificationCode)
    {
        $product = new Product($description, $identificationCode);
        return $this->productRepository->save($product);
    }
}
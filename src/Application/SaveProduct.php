<?php
namespace Application;

use Domain\RepositoryInterface\ProductRepositoryInterface;
use Domain\Entity\Product;

class SaveProduct implements UseCaseInterface
{
    public function __construct()
    { }

    public function save(string $description, string $identificationCode)
    {
        $product = new Product($description, $identificationCode);
        die(xdebug_var_dump($product));
        return $this->productRepository->save($product);
    }
}

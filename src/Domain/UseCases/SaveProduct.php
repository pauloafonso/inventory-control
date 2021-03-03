<?php
namespace Domain\UseCases;

use Domain\RepositoryInterface\ProductRepositoryInterface;
use Domain\Entity\{
    Product,
    ProductDescription,
    ProductIdentificationCode,
};
use Domain\Validator\Exceptions\NotEmptyException;

class SaveProduct implements UseCaseInterface
{
    public function __construct(private ProductRepositoryInterface $productRepository)
    { }

    public function save(DataToSaveProduct $dataToSaveProduct)
    {
        $this->productRepository->save($product);
    }
}

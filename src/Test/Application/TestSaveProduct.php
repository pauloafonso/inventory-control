<?php
namespace Test\Application;

use PHPUnit\Framework\TestCase;
use Infrastructure\Persistence\Repository\ProductRepository;
use Application\SaveProduct;
use Domain\Entity\Product;

class TestSaveProduct extends TestCase
{
    /**
     * @test
    */
    public function shouldExecuteProductRepositorySaveWhenCallUseCaseSaveProduct()
    {
        $productRepository = $this->createMock(ProductRepository::class);
        $productRepository
            ->expects($this->once())
            ->method('save')
            ->with($this->isInstanceOf(Product::class));

        $saveProduct = new SaveProduct($productRepository);
        $saveProduct->save('foo', 'bar');
    }

    /**
     * @test
    */
    public function shouldSaveWhenCallUseCaseSaveProduct()
    {
        $productRepository = $this->createMock(ProductRepository::class);
        $productRepository
            ->method('save')
            ->willReturn(true);

        $saveProduct = new SaveProduct($productRepository);
        $return = $saveProduct->save('foo', 'bar');

        $this->assertEquals(true, $return);
    }
}

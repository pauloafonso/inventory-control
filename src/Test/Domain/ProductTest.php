<?php
namespace App\Test\Domain;

use PHPUnit\Framework\TestCase;
use App\Domain\Product;
use App\Domain\BarCode;

class ProductTest extends TestCase
{
    private Product $product;

    public function setUp(): void
    {
        $this->product = new Product();
    }

    /**
     * @test
    */
    public function shouldThrowInvalidArgumentExceptionWhenSetsEmptyProductDescription()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->product->setDescription('');
    }

    /**
     * @test
    */
    public function shouldThrowInvalidArgumentExceptionWhenSetsEmptyProductIdentificationCode()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->product->setIdentificationCode('');
    }

    /**
     * @test
    */
    public function shouldFailsWhenCreateBarCodeWithNullProductIdentificationCode()
    {
        $this->expectException(\DomainException::class);
        $this->product->createBarCode();
    }

    /**
     * @test
    */
    public function shouldNotFailsWhenCreateBarCodeWithNotNullProductIdentificationCode()
    {
        $this->product
            ->setIdentificationCode('FOO')
            ->createBarCode();

        $barCode = $this->product->getBarCode();

        $this->assertTrue($barCode instanceof BarCode);
    }
}

<?php
namespace App\Test\Domain;

use PHPUnit\Framework\TestCase;
use App\Domain\Product;
use App\Domain\BarCode;

class BarCodeTest extends TestCase
{
    /**
     * @test
    */
    public function shouldNotProcessWhenThereIsNotProductIdentificationCode()
    {
        $product = $this->createMock(Product::class);
        $product
            ->method('getIdentificationCode')
            ->willReturn(null);

        $this->expectException(\DomainException::class);
        $barCode = new BarCode($product);
    }

    /**
     * @test
     * @dataProvider generateBarCodeDataProvider
    */
    public function generateBarCode(
        $getIdentificationCodeMethodReturn,
        $currentDateTime,
        $expectedResult,
    ) {
        $product = $this->createMock(Product::class);
        $product
            ->method('getIdentificationCode')
            ->willReturn($getIdentificationCodeMethodReturn);

        $barCode = new BarCode($product);

        $result = $barCode->generateBarCode($currentDateTime);

        $this->assertEquals($expectedResult, $result);
    }

    public function generateBarCodeDataProvider()
    {
        $currentDateTime = new \DateTime();
        return [
            'shouldNotFailsWhenBarCodeIsValid' => [
                'getIdentificationCodeMethodReturn' => 'FOO',
                'currentDateTime' => $currentDateTime,
                'expectedResult' => sprintf(
                    '%s%s',
                    "VA_FOO_",
                    $currentDateTime->format('dmYHis'),
                ),
            ],
            'shouldNotFailsWhenRemoveSpacesFromIdentificationCode' => [
                'getIdentificationCodeMethodReturn' => 'FOO BAR',
                'currentDateTime' => $currentDateTime,
                'expectedResult' => sprintf(
                    '%s%s',
                    "VA_FOOBAR_",
                    $currentDateTime->format('dmYHis'),
                ),
            ],
        ];
    }
}

<?php
namespace Test\Domain\Entity;

use PHPUnit\Framework\TestCase;
use Domain\Entity\Price;

class PriceTest extends TestCase
{
    /**
     * @test
    */
    public function shouldGetRightPriceValidated()
    {
        $price = new Price(123.22);
        $result = $price->getValue();
        $this->assertEquals(123.22, $result);
    }
}

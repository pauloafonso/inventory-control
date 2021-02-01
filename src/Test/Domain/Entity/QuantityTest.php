<?php
namespace App\Test\Domain\Entity;

use PHPUnit\Framework\TestCase;
use App\Domain\Entity\Quantity;

class QuantityTest extends TestCase
{
    /**
     * @test
    */
    public function shouldGetRightQuantityValidated()
    {
        $price = new Quantity(32);
        $result = $price->getValue();
        $this->assertEquals(32, $result);
    }
}

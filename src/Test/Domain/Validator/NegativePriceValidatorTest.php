<?php
namespace Test\Domain\Validator;

use PHPUnit\Framework\TestCase;
use Domain\Validator\NegativePriceValidator;
use Domain\Validator\InvalidPriceException;

class NegativePriceValidatorTest extends TestCase
{
    /**
     * @test
    */
    public function shouldBeInvalidWhenPriceIsNegative()
    {
        $negativePriceValidator = new NegativePriceValidator();
        $this->expectException(InvalidPriceException::class);
        $this->expectExceptionCode(InvalidPriceException::NEGATIVE_ERROR);
        $negativePriceValidator->isValid(-12.00);
    }

    /**
     * @test
    */
    public function shouldBeInvalidWhenPriceIsNotFloat()
    {
        $negativePriceValidator = new NegativePriceValidator();
        $this->expectException(InvalidPriceException::class);
        $this->expectExceptionCode(InvalidPriceException::UNSUPPORTED_TYPE_ERROR);
        $negativePriceValidator->isValid(-12);
    }

    /**
     * @test
    */
    public function shouldBeValidWhenPriceIsFloatAndPositve()
    {
        $negativePriceValidator = new NegativePriceValidator();
        $negativePriceValidator->isValid(12.23);
        $this->assertTrue(true);
    }
}

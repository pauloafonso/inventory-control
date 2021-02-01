<?php
namespace App\Test\Domain\Validator;

use PHPUnit\Framework\TestCase;
use App\Domain\Validator\VeryHighPriceValidator;
use App\Domain\Validator\InvalidPriceException;

class VeryHighPriceValidatorTest extends TestCase
{
    /**
     * @test
    */
    public function shouldBeInvalidWhenPriceIsVeryHigh()
    {
        $veryHighPriceValidator = new VeryHighPriceValidator();
        $this->expectException(InvalidPriceException::class);
        $this->expectExceptionCode(InvalidPriceException::VERY_HIGH_PRICE_ERROR);
        $veryHighPriceValidator->isValid(100000.01);
    }

    /**
     * @test
    */
    public function shouldBeInvalidWhenPriceIsNotFloat()
    {
        $veryHighPriceValidator = new VeryHighPriceValidator();
        $this->expectException(InvalidPriceException::class);
        $this->expectExceptionCode(InvalidPriceException::UNSUPPORTED_TYPE_ERROR);
        $veryHighPriceValidator->isValid(100001);
    }

    /**
     * @test
    */
    public function shouldBeValidWhenPriceIsFloatAndNotVeryHigh()
    {
        $veryHighPriceValidator = new VeryHighPriceValidator();
        $veryHighPriceValidator->isValid(100000.00);
        $this->assertTrue(true);
    }
}

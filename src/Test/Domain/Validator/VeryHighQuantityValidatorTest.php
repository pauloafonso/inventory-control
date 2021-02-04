<?php
namespace Test\Domain\Validator;

use PHPUnit\Framework\TestCase;
use Domain\Validator\VeryHighQuantityValidator;
use Domain\Validator\InvalidQuantityException;

class VeryHighQuantityValidatorTest extends TestCase
{
    /**
     * @test
    */
    public function shouldBeInvalidWhenQuantityIsVeryHigh()
    {
        $veryHighQuantityValidator = new VeryHighQuantityValidator();
        $this->expectException(InvalidQuantityException::class);
        $this->expectExceptionCode(InvalidQuantityException::VERY_HIGH_QUANTITY_ERROR);
        $veryHighQuantityValidator->isValid(100001);
    }

    /**
     * @test
    */
    public function shouldBeInvalidWhenQuantityIsNotInteger()
    {
        $veryHighQuantityValidator = new VeryHighQuantityValidator();
        $this->expectException(InvalidQuantityException::class);
        $this->expectExceptionCode(InvalidQuantityException::UNSUPPORTED_TYPE_ERROR);
        $veryHighQuantityValidator->isValid(10000.32);
    }

    /**
     * @test
    */
    public function shouldBeValidWhenQuantityIsIntegerAndNotVeryHigh()
    {
        $veryHighQuantityValidator = new VeryHighQuantityValidator();
        $veryHighQuantityValidator->isValid(100000);
        $this->assertTrue(true);
    }
}

<?php
namespace App\Test\Domain\Validator;

use PHPUnit\Framework\TestCase;
use App\Domain\Validator\NegativeQuantityValidator;
use App\Domain\Validator\InvalidQuantityException;

class NegativeQuantityValidatorTest extends TestCase
{
    /**
     * @test
    */
    public function shouldBeInvalidWhenQuantityIsNegative()
    {
        $negativeQuantityValidator = new NegativeQuantityValidator();
        $this->expectException(InvalidQuantityException::class);
        $this->expectExceptionCode(InvalidQuantityException::NEGATIVE_ERROR);
        $negativeQuantityValidator->isValid(-12);
    }

    /**
     * @test
    */
    public function shouldBeInvalidWhenQuantityIsNotInteger()
    {
        $negativeQuantityValidator = new NegativeQuantityValidator();
        $this->expectException(InvalidQuantityException::class);
        $this->expectExceptionCode(InvalidQuantityException::UNSUPPORTED_TYPE_ERROR);
        $negativeQuantityValidator->isValid(23.32);
    }

    /**
     * @test
    */
    public function shouldBeValidWhenQuantityIsIntegerAndPositve()
    {
        $negativeQuantityValidator = new NegativeQuantityValidator();
        $negativeQuantityValidator->isValid(12);
        $this->assertTrue(true);
    }
}

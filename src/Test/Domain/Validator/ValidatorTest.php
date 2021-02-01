<?php
namespace App\Test\Domain\Validator;

use PHPUnit\Framework\TestCase;
use App\Domain\Validator\Validator;

class ValidatorTest extends TestCase
{
    /**
     * @test
    */
    public function shouldThrowsExceptionWhenPassClassThatIsNotInstanceOfValidatorInterface()
    {
        $someInvalidValidator = $this
            ->getMockBuilder('someInvalidValidator')
            ->getMock();

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Validator Class must be instance of ValidatorInterface");

        $validator = new Validator([$someInvalidValidator]);
        $validator->validate('foo');
    }
}

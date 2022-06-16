<?php


use Functionality\FunctionalityPhp\Functionality;
use PHPUnit\Framework\TestCase;

class NumbersTest extends TestCase
{
    public function testClassConstructor()
    {
        // get avg test
        $this->assertIsFloat(Functionality::getAvg(1.5, 2.8));
        // is even test
        $this->assertTrue(Functionality::isEven(2));
        $this->assertFalse(Functionality::isEven(3));
        // is odd test
        $this->assertTrue(Functionality::isOdd(3));
        $this->assertFalse(Functionality::isOdd(2));
        // reverse number test
        $this->assertEquals(54.321, Functionality::reverseNumber(123.45));
        $this->assertEquals(-54.321, Functionality::reverseNumber(-123.45));
    }
}

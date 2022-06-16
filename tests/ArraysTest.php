<?php


use Functionality\FunctionalityPhp\Functionality;
use PHPUnit\Framework\TestCase;

class ArraysTest extends TestCase
{
    public function testClassConstructor()
    {
        // filter test
        $this->assertEquals([3,4,5,6], Functionality::filter([1,3,4,5,6,0], function ($value) {
            return $value > 2;
        }));
        // max test
        $this->assertEquals(10, Functionality::maxArray([1,2,3,4,5,6,7,8,9,10]));
        // min test
        $this->assertEquals(1, Functionality::minArray([1,2,3,4,5,6,7,8,9,10]));
        // random element from array test
        $this->assertIsInt(Functionality::randomElementFromArray([1,2,3,4,5,6,7,8,9,10]));
        // remove duplicates from array test
        $this->assertEquals([1,2,3,4,5,6,7,8,9,10], Functionality::removeDuplicatesFromArray([1,1,2,2,3,3,3,3,4,5,6,7,8,9,10]));
        // shuffle test
        $this->assertIsArray(Functionality::shuffle([1,2,3,4,5,6,7,8,9,10]));
        // sum test
        $this->assertEquals(55, Functionality::sumArray([1,2,3,4,5,6,7,8,9,10]));

    }
}

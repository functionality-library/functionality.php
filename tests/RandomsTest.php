<?php


use Functionality\FunctionalityPhp\Functionality;
use PHPUnit\Framework\TestCase;

class RandomsTest extends TestCase
{
    public function testClassConstructor()
    {
        // random boolean test
        $this->assertIsBool(Functionality::randomBoolean());
        // test random color
        $this->assertMatchesRegularExpression("/[a-z]/i",Functionality::randomColor());
        // test random hex color
        $this->assertMatchesRegularExpression("/^#[0-9a-f]{6}$/i",Functionality::randomHexColor());
        // test random hsl
        $this->assertMatchesRegularExpression("/^hsl\([0-9]{1,3}, [0-9]{1,3}%, [0-9]{1,3}%\)$/i",Functionality::randomHsl());
        // test random number
        $this->assertIsInt(Functionality::randomNumber());
        // test random password
        $this->assertIsString(Functionality::randomString());
    }
}

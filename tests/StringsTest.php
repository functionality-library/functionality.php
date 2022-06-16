<?php


use Functionality\FunctionalityPhp\Functionality;
use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    public function testClassConstructor()
    {
        // is palindrome test
        $this->assertTrue(Functionality::isPalindrome("racecar"));
        $this->assertFalse(Functionality::isPalindrome("racecarod"));
        // capitalize test
        $this->assertEquals("Racecar", Functionality::capitalize("racecar"));
        $this->assertEquals("Racecar In Race", Functionality::capitalize("Racecar in race"));
        // reverse string test
        $this->assertEquals("abcd", Functionality::reverseString("dcba"));
    }
}

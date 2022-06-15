<?php


use Functionality\FunctionalityPhp\Functionality;
use PHPUnit\Framework\TestCase;

class RandomBoolTest extends TestCase
{
    public function testClassConstructor() {
        $this->assertIsBool(Functionality::randomBool());
    }
}
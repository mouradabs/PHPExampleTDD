<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    protected $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
         $result = $this->calculator->add(2, 5);
         $this->assertEquals(7, $result);
    }

    public function testSubtract()
    {
        $result = $this->calculator->subtract(10,5);
        $this->assertEquals(5, $result);
    }

    public function testMultiply()
    {
        $result = $this->calculator->multiply(3,3);
        $this->assertEquals(9, $result);
    }

    public function testDivide()
    {
        $result = $this->calculator->divide(3,3);
        $this->assertEquals(1, $result);
    }
}

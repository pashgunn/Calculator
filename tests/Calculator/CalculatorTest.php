<?php

namespace Calculator;

use App\Calculator;
use Exception;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{

    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testSum()
    {
        $this->assertEquals(5, $this->calculator->sum(1,4));
    }


    public function testDivideException()
    {
        $this->expectException(Exception::class);
        $this->calculator->divide(1,0);
    }

    public function testDivide()
    {
        $this->assertEquals(0.25,$this->calculator->divide(1,4));
    }
}
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

    protected function tearDown(): void
    {

    }

//    /**
//     * @dataProvider calculatorProvider
//     */
    public function testSum()
    {
        $this->assertEquals(5, $this->calculator->sum(1,4));
    }

    public function calculatorProvider(): array
    {
        return [
//            [5, $this->calculator->sum(1,4)],
//            [1, $this->calculator->sum(1,0)],
//            [2, $this->calculator->sum(1,4)],
//                [33, $this->calculator->sum(10,23)]
        ];
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
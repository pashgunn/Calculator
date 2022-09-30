<?php

namespace App;

use Exception;

require 'CalculatorInterface.php';

class Calculator implements CalculatorInterface
{
    public function sum(float $a, float $b): float
    {
        return $a + $b;
    }

    public function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }


    /**
     * @throws Exception
     */
    public function divide(float $a, float $b)
    {
        if (abs($b) < pow(10, -8)) {
            throw new Exception("ArithmeticException");
        } else {
            return $a / $b;
        }
    }
}
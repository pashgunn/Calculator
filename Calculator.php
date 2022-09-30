<?php

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

    /*
     * throws ArithmeticException if |b| < 10e-8
     */
    public function divide(float $a, float $b): float|string
    {
        try {
            if (abs($b) < pow(10, -8)){
                throw new Exception("ArithmeticException");
            }
            return $a / $b;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
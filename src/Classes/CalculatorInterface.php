<?php

interface CalculatorInterface
{

    public function sum(float $a, float $b): float;

    public function subtract(float $a, float $b): float;

    public function multiply(float $a, float $b): float;

    /*
     * throws ArithmeticException if |b| < 10e-8
     */
    public function divide(float $a, float $b);
}
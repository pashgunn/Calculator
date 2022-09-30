<?php

class CalculatorView implements CalculatorViewInterface
{
    public function printResult(float $result): void
    {
        echo $result;
    }

    public function displayError(string $message): void
    {
        echo $message;
    }

    public function getFirstArgumentAsString(): string
    {
        $firsrArgument =1;
        return $firsrArgument;
    }

    public function getSecondArgumentAsString(): string
    {
        $firsrArgument =2;
        return $firsrArgument;
    }
}
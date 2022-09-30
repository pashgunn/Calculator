<?php

class CalculatorView  implements CalculatorViewInterface
{
    public float $firstArgument;
    public float $secondArgument;

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
        return $this->firstArgument;
    }

    public function getSecondArgumentAsString(): string
    {
        return $this->secondArgument;
    }
}
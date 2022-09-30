<?php

require 'CalculatorViewInterface.php';

class CalculatorView  implements CalculatorViewInterface
{
    private string $firstArgument;
    private string  $secondArgument;

    public function printResult(float $result): void
    {
        echo $result;
    }

    public function displayError(string $message): void
    {
        echo $message;
    }

    /**
     * @param string $firstArgument
     */
    public function setFirstArgument(string $firstArgument): void
    {
        $this->firstArgument = $firstArgument;
    }

    /**
     * @param string $secondArgument
     */
    public function setSecondArgument(string $secondArgument): void
    {
        $this->secondArgument = $secondArgument;
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
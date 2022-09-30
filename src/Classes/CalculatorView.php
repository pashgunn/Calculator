<?php

namespace App;

require 'CalculatorViewInterface.php';

class CalculatorView  implements CalculatorViewInterface
{

    public function printResult(float $result): void
    {
        echo "Result: " . $result;
    }

    public function displayError(string $message): void
    {
        echo $message;
    }
}
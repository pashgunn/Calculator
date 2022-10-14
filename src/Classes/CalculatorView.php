<?php

namespace App;

require 'CalculatorViewInterface.php';

class CalculatorView  implements CalculatorViewInterface
{

    public function printResult(float $result): void
    {
        $result = "
        <label for=\"result\">Result:</label>
        <output type=\"text\"  id=\"result\" name=\"result\">$result</output>";
        echo $result;
    }

    public function displayError(string $message): void
    {
        echo $message;
    }
}
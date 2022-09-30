<?php

namespace App;

interface CalculatorViewInterface
{
    public function printResult(float $result): void;

    public function displayError(string $message): void;

}
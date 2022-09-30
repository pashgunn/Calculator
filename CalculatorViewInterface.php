<?php

interface CalculatorViewInterface
{
    public function printResult(float $result): void;

    public function displayError(string $message): void;

    public function getFirstArgumentAsString(): string;

    public function getSecondArgumentAsString(): string;
}
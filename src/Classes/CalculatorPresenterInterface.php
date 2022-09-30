<?php

namespace App;

interface CalculatorPresenterInterface
{
    public function onPlusClicked(): void;

    public function onMinusClicked(): void;

    public function onMultiplyClicked(): void;

    public function onDivideClicked(): void;

    public function getFirstArgumentAsString(): string;

    public function getSecondArgumentAsString(): string;
}
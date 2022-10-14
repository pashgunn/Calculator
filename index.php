<?php

use App\Calculator;
use App\CalculatorController;
use App\CalculatorView;

require "vendor/autoload.php";
require_once "index.html";
$model = new Calculator();
$view = new CalculatorView();
$controller = new CalculatorController($model,$view);

if (isset($_POST["operation"]))
{
    $controller->setFirstArgument($_POST['num1']);
    $controller->setSecondArgument($_POST['num2']);

    switch ($_POST["operation"])
    {
        case "+":
            $controller->onPlusClicked();
            break;
        case "-":
            $controller->onMinusClicked();
            break;
        case "*":
            $controller->onMultiplyClicked();
            break;
        case "/":
            $controller->onDivideClicked();
            break;
    }
}
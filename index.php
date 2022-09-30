<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Калькулятор</title>
</head>
<body>
<form action="" method="post">

    <!-- поле ввода первого числа -->
    <label for="num1">First number:</label><br>
    <input type="text" id="num1" name="num1" required/><br>

    <!-- поле ввода второго числа -->
    <label for="num2">Second number:</label><br>
    <input type="text" id="num2" name="num2" required/><br>

    <!-- блок с кнопками -->
    <div>
        <button type="submit" name="operation" value="+">+</button>
        <button type="submit" name="operation" value="-">-</button>
        <button type="submit" name="operation" value="*">*</button>
        <button type="submit" name="operation" value="/">/</button>
    </div>
</form>
</body>
</html>

<?php

require 'CalculatorController.php';
require 'Calculator.php';
require 'CalculatorView.php';

$model = new Calculator();
$view = new CalculatorView();
$controller = new CalculatorController($model,$view);

if (isset($_POST["operation"])) {
    $controller->setFirstArgument($_POST['num1']);
    $controller->setSecondArgument($_POST['num2']);

    switch ($_POST["operation"]) {
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
?>
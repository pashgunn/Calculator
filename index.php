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

    <!-- блок с кнопками -->
    <div>
        <button name="myActionName" type="submit" value="0">0</button>
        <button name="myActionName" type="submit" value="1">1</button>
        <button name="myActionName" type="submit" value="2">2</button>
        <button name="myActionName" type="submit" value="3">3</button>
    </div>

    <!-- поле ввода второго числа -->
    <label for="num2">Second number:</label><br>
    <input type="text" id="num2" name="num2" required/><br>

    <!-- кнопка для рассчётов -->
    <button type="submit" name="submit">Посчитать</button>

    <p id="result"></p>

</form>
</body>
</html>


<?php

require 'CalculatorView.php';
require 'Calculator.php';
require 'CalculatorPresenter.php';

$view = new CalculatorView();
$model = new Calculator();
$presenter = new CalculatorPresenter();
$presenter->setModel($model);
$presenter->setView($view);

if(isset($_POST['submit'])) {
    $view->setFirstArgument($_POST['num1']);
    $view->getFirstArgumentAsString();
    $view->setSecondArgument($_POST['num2']);
    print_r($_POST);
    if(isset($_POST['submit'])) {
        if (isset($_POST['myActionName'])) {
            switch ($_POST['myActionName']) {
                case '0':
                    echo 1;
                    break;
                case '1':
                    include_once 'you_file2.php';
                    break;
                case '2':
                    include_once 'you_file3.php';
                    break;
                case '3':
                    include_once 'you_file4.php';
                    break;
            }
        }
    }
//    if($_POST['operation'] == 'minus')
//    {
//        $total = $_POST['number1'] - $_POST['number2'];
//    }
//    if($_POST['operation'] == 'times')
//    {
//        $total = $_POST['number1'] * $_POST['number2'];
//    }
//    if($_POST['operation'] == 'divided by')
//    {
//        $total = $_POST['number1'] / $_POST['number2'];
//    }

}
?>
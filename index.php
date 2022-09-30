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
        <input type="radio" name="oper" value="plus" />+ <br>
        <input type="radio" name="oper" value="minus" />- <br>
        <input type="radio" name="oper" value="mult" />* <br>
        <input type="radio" name="oper" value="div" />/ <br>
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
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$oper = $_POST["oper"];
echo $num1 . " " . $num2 . " " . $oper;
?>
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
        <input type="submit" name="oper" value="+"/>
        <input type="submit" name="oper" value="-"/>
        <input type="submit" name="oper" value="*"/>
        <input type="submit" name="oper" value="/"/>
    </div>

    <p id="result"></p>
</form>
</body>
</html>

<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$oper = $_POST["oper"];

switch ($oper) {
    case "+":
        $result = $num1 + $num2;
        echo "Result:" . $result;
        break;
    case "-":
        $result = $num1 - $num2;
        echo "Result:" . $result;
        break;
    case "*":
        $result = $num1 * $num2;
        echo "Result:" . $result;
        break;
    case "/":
        $result = $num1 / $num2;
        echo "Result:" . $result;
        break;
}
?>
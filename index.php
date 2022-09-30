
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Калькулятор</title>
</head>
<body>
<form action="" method="post">
    <!-- поле ввода первого числа -->
    <label for="num1"></label><input id="num1" />

    <!-- блок с кнопками -->
    <div id="operator_btn">
        <button id="plus" >+</button>
        <button id="minus" >-</button>
        <button id="times" >x</button>
        <button id="divide" >:</button>
    </div>

    <!-- поле ввода второго числа -->
    <label for="num2"></label><input id="num2" />
    <br>

    <!-- кнопка для рассчётов -->
    <button type="submit" name="submit">Посчитать</button>

    <p id="result"></p>

</form>
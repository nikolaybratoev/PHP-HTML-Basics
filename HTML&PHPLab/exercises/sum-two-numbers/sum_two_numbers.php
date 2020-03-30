<?php
if (isset($_GET)) {
    $firstNumber = intval(htmlspecialchars($_GET['num1']));
    $secondNumber = intval(htmlspecialchars($_GET['num2']));
    $sum = $firstNumber + $secondNumber;
    echo $firstNumber . " + " . $secondNumber . " = " . $sum;
}

include "sum_two_numbers_frontend.php";
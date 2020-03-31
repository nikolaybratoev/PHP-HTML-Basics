<?php
if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender'])) {
    $name = htmlspecialchars($_GET['name']);
    $age = htmlspecialchars($_GET['age']);
    $gender = $_GET['gender'];
    echo "My name is $name. I am $age years old. I am $gender.";
}
include "form_data_frontend.php";
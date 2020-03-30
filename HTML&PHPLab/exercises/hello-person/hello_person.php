<?php
if (isset($_GET['person'])) {
    $name = htmlspecialchars($_GET['person']);
    echo "Hello " . $name . "!";
}

include "hello_person_frontend.php";
<?php
if (isset($_GET['name']) && isset($_GET['phone'])
    && isset($_GET['age']) && isset($_GET['address'])) {
    $name = htmlspecialchars($_GET['name']);
    $phone = htmlspecialchars($_GET['phone']);
    $age = htmlspecialchars($_GET['age']);
    $address = htmlspecialchars($_GET['address']);
    echo "<table border='3'>";
        echo "<tr>";
            echo "<td style='background: orange'>Name</td><td>$name</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td style='background: orange'>Phone</td><td>$phone</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td style='background: orange'>Age</td><td>$age</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td style='background: orange'>Address</td><td>$address</td>";
        echo "</tr>";
    echo "</table>";
}

include "html_table_frontend.php";

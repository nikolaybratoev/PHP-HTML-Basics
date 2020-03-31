<?php

if (isset($_GET['categories']) && isset($_GET['tags']) && isset($_GET['months'])) {
    $categories = explode(", ", htmlspecialchars($_GET['categories']));
    $tags = explode(", ", htmlspecialchars($_GET['tags']));
    $months = explode(", ", htmlspecialchars($_GET['months']));
    echo "<h1>Categories</h1>";
    echo "<ul>";
    foreach ($categories as $category) {
        echo "<li> $category </li>";
    }
    echo "</ul>";
    echo "<h1>Tags</h1>";
    echo "<ul>";
    foreach ($tags as $tag) {
        echo "<li> $tag </li>";
    }
    echo "</ul>";
    echo "</ul>";
    echo "<h1>Months</h1>";
    echo "<ul>";
    foreach ($months as $month) {
        echo "<li> $month </li>";
    }
    echo "</ul>";
}

include "navigation_builder_frontend.php";

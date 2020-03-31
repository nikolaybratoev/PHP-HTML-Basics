<?php
var_dump($_GET);
if (isset($_GET)) {
    $string = $_GET;
    $string = str_replace("&#039;", "'", $string);
    $t = array(' ', "\t", '=', '+', '-', '*', '/', '\\', ',', '.', ';',
        ':', '[', ']', '{', '}', '(', ')', '<', '>', '&', '%', '$', '@', '#', '^', '!', '?', '~'); // separators
    $string = str_replace($t, " ", $string);
    $string = trim(preg_replace("/\s+/", " ", $string));
    $array = explode(" ", $string);
    $toLower = array_map('strtolower', $array);
    $map = [];
    for ($i = 0; $i < count($toLower); $i++) {
        if (!key_exists($toLower[$i], $map)) {
            $map[$toLower[$i]] = 1;
        } else {
            $map[$toLower[$i]]++;
        }
    }
    echo print_r($map);
}

include "word_mapping_frontend.php";

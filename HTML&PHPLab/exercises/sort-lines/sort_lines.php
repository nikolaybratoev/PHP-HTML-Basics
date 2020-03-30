<?php
$sortedLines = "";
if (isset($_GET['lines'])) {
    $data = htmlspecialchars($_GET['lines']);
    $input = explode("\n", $data);
    $input = array_map("trim", $input);
    $input = array_filter($input);
    sort($input, SORT_STRING);
    $sortedLines = implode("\n", $input);
}

include "sort_lines_frontend.php";

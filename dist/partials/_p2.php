<?php
$postGood = !empty($_POST);
if ($postGood) {
    $strs = $_POST["array"];
    $split_str = explode(",", $strs);
    $strings = array_map('trim', $split_str);
}

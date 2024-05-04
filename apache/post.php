<?php
header("Location: index.php");

$date = date("Y/m/d H:i:s");
$hoge = $_POST['hoge'];
$moge = $_POST['moge'];
$input = $date.",".$hoge.",".$moge."\n";
$csv = fopen('hoge.csv', 'a');

fputs($csv, $input);
fclose($csv);

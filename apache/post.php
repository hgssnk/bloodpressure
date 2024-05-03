<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
<title>TITLE</title>
<style></style>
</head>

<body>
<?php
echo $_POST['hoge'];
echo $_POST['moge'];

$date = date("Y/m/d H:i:s");
$hoge = $_POST['hoge'];
$input = $date.",".$hoge."\n";
$csv = fopen('hoge.csv', 'a');

fputs($csv, $input);
fclose($csv);

?>
</body>

</html>

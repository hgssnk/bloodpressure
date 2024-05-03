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

$hoge = $_POST['hoge'];
$csv = fopen('hoge.csv', 'w');
fputs($csv, $hoge);
fclose($csv);

?>
</body>

</html>

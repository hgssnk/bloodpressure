<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
<title>TITLE</title>
<style></style>
</head>

<body>
<table border="1" align="center">
  <tr>
    <th>date</th>
    <th>min</th>
    <th>max</th>
  </tr>

<?php
$csv = file('./hoge.csv');
foreach ($csv as $line){
	$hoge = explode(',', $line);
	echo "<tr>"
		. "<td>$hoge[0]</td>"
		. "<td>$hoge[1]</td>"
		. "<td>$hoge[2]</td>"
		. "</tr>";
}
?>
</body>

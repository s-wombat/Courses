<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>


<?php

$arr = [];
$num = 300;

while (count($arr) < 20) {
	if ($num%13==0 || $num%17==0) {
		array_push($arr,$num);
	}
	$num++;
}
var_dump($arr);

?>
</body>
</html>





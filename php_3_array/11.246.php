<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<?php
$arr = [1,2,6,4,11,6,12,8];
$arr2 = [3,4,5,6,7,8,9,10];
$sum = [];
$mult = [];
$max = [];
for ($i=0; $i < count($arr); $i++) { 
	$sum[$i] = $arr[$i] + $arr2[$i];
	$mult[$i] = $arr[$i] * $arr2[$i];
	if ($arr[$i] > $arr2[$i]) {
		$max[$i] = $arr[$i];
	} else {
		$max[$i] = $arr2[$i];
	}
}
print_r($sum);
print_r($mult);
print_r($max);




?>
</body>
</html>





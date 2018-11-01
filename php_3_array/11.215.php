<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<?php

$arr = [];
$arr2 = [];
for ($i=0; $i < 26; $i++) { 
	$rand = mt_rand(1,10);
	array_push($arr, $rand);
}
for ($j=0; $j < 26; $j++) { 
	$rand2 = mt_rand(1,10);
	array_push($arr2, $rand2);
}
// print_r($arr);
// print_r($arr2);
$sum1 = 0;
$sum2 = 0;
$sumAll = 0;
for ($i=0; $i < count($arr); $i++) { 
	$sum1 += $arr[$i];
}
for ($j=0; $j < count($arr2); $j++) { 
		$sum2 += $arr2[$j];
	}
echo $sum1."<br />";
echo $sum2."<br />";
$sumAll = $sum1 + $sum2;
echo $sumAll;


?>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<style type="text/css">
	p {
		margin-bottom: 20px;
	}
</style>
<?php
$arr = [];
$arr2 = [];
$arr3 = [];
$arr4 = [];
$arr5 = [];
//Массив случайных чисел
// 1) 0<=x<=1, 2) 22<=x<23, 3) 0<=x<10, 4) -50<=x<50, 5) 0<=x<=10
echo "<p>";
for ($i=0; $i < 15; $i++) { 
	$rand = mt_rand(0,10);
	if ($rand!=0) $rand=$rand/10;
	array_push($arr, $rand);
}
print_r($arr);
echo "</p>";

echo "<p>";
for ($i=0; $i < 15; $i++) { 
	$num = mt_rand(0,10);
	if ($num!=0) $num=$num/10;
	$rand2 = mt_rand(22,23);
	if ($rand2!=23) $rand2=$rand2+$num;
	if ($rand2==23) $rand2=$rand2-$num;
	array_push($arr2, $rand2);
}
print_r($arr2);
echo "</p>";

echo "<p>";
for ($i=0; $i < 15; $i++) { 
	$num = mt_rand(0,10);
	if ($num!=0) $num=$num/10;
	$rand3 = mt_rand(0,9);
	$rand3=$rand3+$num;
	array_push($arr3, $rand3);
}
print_r($arr3);
echo "</p>";

echo "<p>";
for ($i=0; $i < 15; $i++) { 
	$num = mt_rand(0,10);
	if ($num!=0) $num=$num/10;
	$rand4 = mt_rand(-50,49);
	$rand4=$rand4+$num;
	array_push($arr4, $rand4);
}
print_r($arr4);
echo "</p>";

echo "<p>";
for ($i=0; $i < 15; $i++) { 
	$rand5 = mt_rand(0,10);
	array_push($arr5, $rand5);
}
print_r($arr5);
echo "</p>";


?>
</body>
</html>





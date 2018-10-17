<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
a:<input type="text" name="a">


<input type="submit">
</form>	
<p></p>

<?php
$a=isset($_GET['a']) ? $_GET['a'] : '';
$b=isset($_GET['b']) ? $_GET['b'] : '';


// $a = 11;
// $b = 2;
// $c = 3;
// $a = rand(0, 5);

if ($a == 0  || $a < 10 || $a >= 100) {
	echo "введите двузначное положительное число";
}else {
	$sqr_num = pow($a, 2);
	$first_num = intval($a/10);
	$second_num = $a%10;
	$sumX4 = (pow($first_num, 3) + pow($second_num, 3))*4;
	if ($sqr_num == $sumX4) {
		echo "числа равны ".$sqr_num." & ".$sumX4;
	}else {
		echo "числа НЕ равны ".$sqr_num." & ".$sumX4;
	}
}













?>



</body>
</html>





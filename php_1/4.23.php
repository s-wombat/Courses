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

if ($a == 0 || $a < 10 || $a >= 100) {
	echo "введите двузначное положительное число";
}else {
	$b = intval($a/10);
	$c = $a%10;
	if ($b > $c) {
		echo "первое число больше второго";
	}elseif ($b < $c) {
		echo "второе число больше первого";
	}else {
		echo "числа равны";
	}
}













?>



</body>
</html>





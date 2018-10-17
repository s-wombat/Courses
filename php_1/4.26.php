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



// $a = 11;
// $b = 2;
// $c = 3;
// $a = rand(0, 5);

if ($a == 0  || $a < 10 || $a >= 100) {
	echo "введите двузначное положительное число";
}else {
	$first_num = intval($a/10);
	$second_num = $a%10;
	$sum = $first_num + $second_num;
	if ($sum%3 == 0) {
		echo "сумма цифр кратна трём. Сумма ".$sum;
	}else {
		echo "сумма цифр НЕ кратна трём. Сумма ".$sum;
	}
	if ($sum%$a) {
		echo "; сумма цифр НЕ кратна А";
	}else {
		echo "; сумма цифр НЕ кратна А";
	}
}













?>



</body>
</html>





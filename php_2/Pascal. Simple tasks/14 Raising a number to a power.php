<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		n:<input type="text" name="n"><br>
		d:<input type="text" name="d"><br>
		<input type="submit">

	</form>	
	<p></p>

<?php

$n=isset($_GET['n']) ? $_GET['n'] : '';
$d=isset($_GET['d']) ? $_GET['d'] : '';
if ($n < 0) {
	$n = $n * -1;
}

$res = 1;

	for ($i=0; $i < $d; $i++) { 
		$res *= $n;
	}

if ($d < 0) { // отрицательное значение степени не получаестя
	$d *= -1;
	for ($i=0; $i < $d; $i++) { 
		
		$res = 1/$res*$n;
	} 
	var_dump($res);
} elseif ($d = 0) {
	$res = 1;
}


	echo $res;
// echo pow($n, $d);
?>



</body>
</html>





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

$m = 0;
$a = 0;
$c = 0;
while ($n > 1) {
	$a = $n%10;
	if ($a != $d) {
		$m = $m*10 + $a;
	} 	
	$n = $n/10;
	
}
while ($m > 1) {
	$c = $c*10 + $m%10;
	$m = $m/10;
}
echo $c;





?>



</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		n:<input type="text" name="n"><br>
		<!-- b:<input type="text" name="b"><br> -->
		<input type="submit">

	</form>	
	<p></p>

<?php

$n=isset($_GET['n']) ? $_GET['n'] : '';

if ($n < 0) {
	$n = $n * -1;
}

$a = 0;
$b = 1;
$c = 0;
$sum = 0;
echo $a.', '.$b.', ';
for ($i=3; $i <= $n; $i++) { 
	$sum = $a + $b;
	echo $sum.', ';

	$c = $b;
	$b = $a + $b;
	$a = $c;
}



?>



</body>
</html>





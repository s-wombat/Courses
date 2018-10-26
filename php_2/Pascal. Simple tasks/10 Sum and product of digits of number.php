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


$sum = 0;
$mult = 1;
while ($n > 1) {
	$sum += $n%10;
	$mult *= $n%10;
	$n = $n/10; 
}
echo $sum.' + '.$mult;



?>



</body>
</html>





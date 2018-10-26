<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		n:<input type="text" name="n"><br>

		<input type="submit">
	</form>	
	<p></p>

<?php

$n=isset($_GET['n']) ? $_GET['n'] : '';


$sum = 0;
while ($n > 1) {
	$x = $n%10;
	if ($x%2 == 0) {
	 	$sum += $x; 
	 } 
	 $n = $n/10;
}
echo 'сумма чётных цифр числа '.$sum;

?>



</body>
</html>





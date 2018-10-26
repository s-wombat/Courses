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
if ($n < 0) {
	$n = $n * -1;
}
$m = 0;
$a = 0;


 while ($n > 1) {
	$a = $n%10;
	$n = $n/10;
	$m = $m*10 + $a;
}
echo $m;






?>



</body>
</html>





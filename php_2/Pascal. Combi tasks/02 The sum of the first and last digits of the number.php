<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		n:<input type="text" name="n"><br>
		<!-- d:<input type="text" name="d"><br> -->
		<input type="submit">

	</form>	
	<p></p>


<?php

$n=isset($_GET['n']) ? $_GET['n'] : '';
// $d=isset($_GET['d']) ? $_GET['d'] : '';
if ($n < 0) {
	$n = $n * -1;
}
$b = 0;
$m = $n%10;
$n = $n/10;
while ($n > 1) {
	$b = $n%10;
	$n = $n/10;
}
echo round($m+$b);





?>



</body>
</html>





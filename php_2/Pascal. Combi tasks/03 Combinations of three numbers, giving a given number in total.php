<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		Предел для перебираемых чисел:<input type="text" name="n"><br>
		Искомая сумма:<input type="text" name="d"><br>
		<input type="submit">

	</form>	
	<p></p>


<?php

$n=isset($_GET['n']) ? $_GET['n'] : '';
$d=isset($_GET['d']) ? $_GET['d'] : '';
if ($n < 0 && $d < 0) {
	$n *= -1;
	$d *= -1;
}

for ($i=1; $i <= $n; $i++) { 
	for ($j=1; $j <= $n; $j++) { 
		for ($k=1; $k <= $n; $k++) { 
			$sum = $i + $j + $k;
			if ($sum == $d) {
				echo $i.' '.$j.' '.$k.'<br>';
			}
		}
	}
}



?>



</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		m: <input type="text" name="m"><br>
		n: <input type="text" name="n"><br>
		<input type="submit">

	</form>	
	<p></p>


<?php

$m=isset($_GET['m']) ? $_GET['m'] : '';
$n=isset($_GET['n']) ? $_GET['n'] : '';

if ($n < 0 ) {
	$n *= -1;
}
echo $m.'<br>'.$n.'<br>';
while ($m <= $n) {
	echo $m.": ";
	for ($i=2; $i < $m-1; $i++) { 
		if ($m%$i == 0) {
			echo $i." ";
		}	
	}
	echo "<br>";
	$m++;
}





?>



</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		factorial:<input type="text" name="n"> !<br>
		<!-- b:<input type="text" name="b"><br> -->
		<input type="submit">

	</form>	
	<p></p>

<?php

$n=isset($_GET['n']) ? $_GET['n'] : '';


$res = 1;
if ($n >= 0) {
	for ($i=1; $i <= $n; $i++) { 
		$res = $res * $i;
	}
	echo $res.' ';
} else {
	echo "введите число больше нуля";
}


?>



</body>
</html>





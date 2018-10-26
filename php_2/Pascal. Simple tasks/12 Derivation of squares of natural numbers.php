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

$y = 0;
for ($i=1; $i < $n; $i++) { 
	$y = $i * $i;
	if ($y < $n){
		echo $y.' ';
	}

}
// То же самое, с помощью while
// $x = 1;
// $y = 0;
// while ($y < $n) {
// 	$y = $x * $x;
// 	if ($y < $n){
// 		echo $y.' ';
// 	}
// 	$x++;
// }


?>



</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		x: <input type="text" name="x"><br>
		y: <input type="text" name="y"><br>
		<input type="submit">

	</form>	
	<p></p>


<?php
$x=isset($_GET['x']) ? $_GET['x'] : '';
$y=isset($_GET['y']) ? $_GET['y'] : '';

if ($x < 0 && $y < 0) {
	$x *= -1;
	$y *= -1;
}
if ($x == 0 || $x == '' || $y == 0 || $y == '') {
	echo "Введите значения Х и У";
} else {

	for ($i=0; $i < $y; $i++) { 
		echo $x.' ';
	}
}



?>



</body>
</html>





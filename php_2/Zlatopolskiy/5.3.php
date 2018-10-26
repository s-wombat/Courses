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
<style type="text/css">
	.bum {
		float: left;
		margin: 0 20px;
		font-size: 20px;
	}
</style>

<?php
$x=isset($_GET['x']) ? $_GET['x'] : '';
$y=isset($_GET['y']) ? $_GET['y'] : '';

if ($x < 0 && $y < 0) {
	$x *= -1;
	$y *= -1;
}
echo '<div class="bum">';
	for ($i=20; $i < 35; $i++) { 
		echo $i.'<br>';
	}
		echo '</div>';
		
if ($y == 0 || $y == '') {
	echo "Введите значения Х или У";
} else {
	echo '<div class="bum">';
	if ($y >= 10) {
		for ($i=10; $i <= $y; $i++) { 
			echo $i*$i.'<br>';
		}
	} else {
		echo 'Введите "у" больше либо равно 10';
	}
	echo '</div>';
}



?>



</body>
</html>





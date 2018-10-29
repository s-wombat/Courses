<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<!-- <form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		x: <input type="text" name="x"><br>
		y: <input type="text" name="y"><br>
		<input type="submit">

	</form>	 -->
	<p></p>
<style type="text/css">
	.bum {
		float: left;
		margin: 0 20px;
		font-size: 20px;
	}
</style>

<?php
// $x=isset($_GET['x']) ? $_GET['x'] : '';
// $y=isset($_GET['y']) ? $_GET['y'] : '';

// if ($x < 0 && $y < 0) {
// 	$x *= -1;
// 	$y *= -1;
// }


for ($i=4; $i <= 28; $i++) { 
	$t = $i + 2;
	$y = 2*$t*$t+5.5*$t-2;
	echo $y."<br>";
	
}


?>



</body>
</html>





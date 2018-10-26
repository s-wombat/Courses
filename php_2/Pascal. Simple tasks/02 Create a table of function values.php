<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<!-- 	<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		n:<input type="text" name="n"><br>

		<input type="submit">

	</form>	 -->
	<p></p>

<?php


$y = 0;
$x = -5;


 while ($x <= 5) {
	$y = 5 - $x*$x/2;
	echo $x.' | '.$y.'<br>';
	$x = $x + 0.5;
}

?>



</body>
</html>





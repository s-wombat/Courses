<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		a:<input type="text" name="a"><br>
		b:<input type="text" name="b"><br>
		<input type="submit">

	</form>	
	<p></p>

<?php

$a=isset($_GET['a']) ? $_GET['a'] : '';
$b=isset($_GET['b']) ? $_GET['b'] : '';

// $x = 0;
if ($a <= $b) {
	for ($x=0; $a <= $b ; $a++) { 
		$x = $a * $a * $a;
		echo $x.' ';
	}
} else {
	for ($x=0; $b <= $a ; $a--) { 
		$x = $a * $a * $a;
		echo $x.' ';
	}
}

// if ($a <= $b) {
// 	while ($a <= $b) {
// 	$x = $a * $a * $a;
// 	$a++;
// 	echo $x.' ';
// }
// } else {
// 	while ($b <= $a) {
// 	$x = $a * $a * $a;
// 	$a--;
// 	echo $x.' ';
// }
// }


?>



</body>
</html>





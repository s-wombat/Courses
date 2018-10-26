<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		sign: <input type="text" name="sign"><br>
		x: <input type="text" name="x"><br>
		y: <input type="text" name="y"><br>
		<input type="submit">

	</form>	
	<p></p>


<?php
$sign=isset($_GET['sign']) ? $_GET['sign'] : '';
$x=isset($_GET['x']) ? $_GET['x'] : '';
$y=isset($_GET['y']) ? $_GET['y'] : '';

// if ($n < 0 ) {
// 	$n *= -1;
// }


$z = 0;


	echo "sign: ".$sign.'<br>';
	if ($sign != '0') {
			if ($sign == '+' || $sign == '-' || $sign == '*' || $sign == '/') {
			 echo "x = ".$x.'<br>';
			 echo "y = ".$y.'<br>';
			 switch ($sign) {
			 	case '+':
			 		$z = $x + $y;
			 		echo $z;
			 		break;
			 	case '-':
			 		$z = $x - $y;
			 		echo $z;
			 		break;
			 	case '*':
			 		$z = $x * $y;
			 		echo $z;
			 		break;
			 	case '/':
			 		if ($y != 0) {
			 		$z = $x / $y;
			 		echo $z;
			 		} else {
			 			echo "делить на нуль НИЗЗЯЯ!!";
			 		}
			 		break;
				}
			}
	} else {
		echo "Вы ввели не верный знак!";
	}


?>



</body>
</html>





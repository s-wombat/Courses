<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
x:<input type="text" name="x">


<input type="submit">
</form>	
<p></p>

<?php
$x=isset($_GET['x']) ? $_GET['x'] : '';



// $a = 11;
// $b = 2;
// $c = 3;
// $a = rand(0, 5);

if ($x == 0){
	echo "введите число отличное от нуля";
}elseif($x > 0) {
	echo $y = pow(sin(deg2rad($x)), 2);
}elseif ($x < 0) {
	echo $y = 1-2*sin(deg2rad(pow($x, 2)));
}












?>



</body>
</html>





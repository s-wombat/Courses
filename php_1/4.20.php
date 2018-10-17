<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
a:<input type="text" name="a">
b:<input type="text" name="b">

<input type="submit">
</form>	
<p></p>

<?php
$m=isset($_GET['a']) ? $_GET['a'] : '';
$n=isset($_GET['b']) ? $_GET['b'] : '';


// $m = 11;
// $n = 2;
// $c = 3;
// $a = rand(0, 5);
if ($m == 0 || $n == 0) {
	echo "введите число отличное от нуля ";
}elseif (is_int($m/$n)) {
	echo $m/$n;
}else {
	echo "m на n нацело не делится";
}
















?>



</body>
</html>





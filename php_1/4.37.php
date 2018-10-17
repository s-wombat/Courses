<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
a:<input type="text" name="a">
<!-- b:<input type="text" name="b"> -->

<input type="submit">
</form>	
<p></p>

<?php
$a=isset($_GET['a']) ? $_GET['a'] : '';
// $b=isset($_GET['b']) ? $_GET['b'] : '';



if ($a >= -5 && $a <= 3) {
	echo "a = (-5, 3)";
}else {
	echo "ошибка";
}

















?>



</body>
</html>





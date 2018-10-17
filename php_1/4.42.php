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
c:<input type="text" name="c">
<input type="submit">
</form>	
<p></p>

<?php
$a=isset($_GET['a']) ? $_GET['a'] : '';
$b=isset($_GET['b']) ? $_GET['b'] : '';
$c=isset($_GET['c']) ? $_GET['c'] : '';


if ($a < $b && $b < $c)   {
	echo "a < b < c";
}elseif ($b > $a && $a > $c) {
	echo "b > a > c";
}else {
	echo "false";
}

















?>



</body>
</html>





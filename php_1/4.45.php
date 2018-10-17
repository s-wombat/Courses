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
<!-- <p></p> -->
c:<input type="text" name="c">
<!-- d:<input type="text" name="d"> -->
<input type="submit">
</form>	
<p></p>

<?php
$a=isset($_GET['a']) ? $_GET['a'] : '';
$b=isset($_GET['b']) ? $_GET['b'] : '';
$c=isset($_GET['c']) ? $_GET['c'] : '';
// $d=isset($_GET['d']) ? $_GET['d'] : '';


if ($a == $b)   {
	echo "a = b";
}elseif ($a == $c){
	echo "a = c";
}elseif ($b == $c) {
	echo "b = c";
}else {
	echo "ошибка";
}

















?>



</body>
</html>





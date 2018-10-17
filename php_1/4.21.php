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
$a=isset($_GET['a']) ? $_GET['a'] : '';
$b=isset($_GET['b']) ? $_GET['b'] : '';


// $a = 11;
// $b = 2;
// $c = 3;
// $a = rand(0, 5);
if ($a == 0 || $b == 0) {
	echo "введите число отличное от нуля ";
}elseif (is_int($a/$b)) {
	echo $b;
}else {
	echo "$b не делитель $a";
}
















?>



</body>
</html>





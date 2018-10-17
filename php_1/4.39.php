<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
x:<input type="text" name="x">
<!-- y:<input type="text" name="y"> -->

<input type="submit">
</form>	
<p></p>

<?php
$x=isset($_GET['x']) ? $_GET['x'] : '';
$y=isset($_GET['y']) ? $_GET['y'] : '';



if ($x >= 5 || $x <= -1)   {
	echo "точка в нужной области";
}else {
	echo "ошибка";
}

















?>



</body>
</html>





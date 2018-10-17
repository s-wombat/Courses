<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
километры:<input type="text" name="km">
футы:<input type="text" name="ft">

<input type="submit">
</form>	
<p></p>

<?php
$km=isset($_GET['km']) ? $_GET['km'] : '';
$ft=isset($_GET['ft']) ? $_GET['ft'] : '';

$km_in_ft = $km*3281;

if ($km_in_ft > $ft) {
	echo "km > ft";
}elseif ($km_in_ft < $ft) {
	echo "km < ft";
}elseif ($km_in_ft == $ft) {
	echo "km = ft";
}

















?>



</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<?php

$percent = 10;
$km = 10;

for ($i=1; $i <= 365; $i++) { 
	$km += $km*$percent/100;
	if ($km >= 20) {
		echo $i.'<br>';
		break;
	}
}

$distance = 10;
for ($j=1; $j <= 365; $j++) { 
	$distance += $distance*$percent/100;
	if ($distance >= 100) {
		echo $j.'<br>';
		break;
	}
}

?>
</body>
</html>





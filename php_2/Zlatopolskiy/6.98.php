<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<?php

$percent = 2;
$deposit = 1000;
$rate = 0;

for ($i=1; $i <= 12; $i++) { 
	$rate += $deposit*$percent/100;
	if ($rate > 30) {
		echo $i.'<br>';
		break;
	}
}


for ($j=1; $j <= 12; $j++) { 
	$deposit += $deposit*$percent/100;
		if ($deposit >= 1200) {
		echo $j.'<br>';
		break;
	}
}

?>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<style type="text/css">
	p {
		margin-bottom: 20px;
	}
</style>
<?php

$cars = [];
$power = [];
echo "<p>";
echo "cars ";
for ($i=0; $i < 30; $i++) { 
	$rand = mt_rand(1,100);
	array_push($cars, $rand);
	echo $cars[$i]." ";
}
echo "</p>";
echo "<p>";
echo "power ";
for ($i=0; $i < 30; $i++) { 
	$rand = mt_rand(1,100);
	array_push($power, $rand);
	echo $power[$i]." ";
}
echo "</p>";
for ($i=0; $i < count($cars); $i++) { 
	if ($power[$i] < 80) {
		echo $cars[$i]."<br />";
	}
}


?>
</body>
</html>





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
$volume = [];
$price = [];
echo "<p>";
echo "volume ";
for ($i=0; $i < 22; $i++) { 
	$rand = mt_rand(1,100);
	array_push($volume, $rand);
	echo $volume[$i]." ";
}
echo "</p>";
echo "<p>";
echo "price ";
for ($i=0; $i < 22; $i++) { 
	$rand = mt_rand(1,100);
	array_push($price, $rand);
	echo $price[$i]." ";
}
echo "</p>";

for ($i=0; $i < count($volume); $i++) { 
	if ($price[$i] < 50) {
		echo $volume[$i]."<br />";
	}
}

?>
</body>
</html>





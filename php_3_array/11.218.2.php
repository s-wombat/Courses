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
$length = [];
$width = [];
$height = [];
$parallelepiped = [];
$volume = 0;
echo "<p>";
for ($i=0; $i < 12; $i++) { 
	$rand = mt_rand(1,10);
	array_push($length, $rand);
	echo $length[$i]." ";
}
echo "</p>";
echo "<p>";
for ($i=0; $i < 12; $i++) { 
	$rand = mt_rand(1,10);
	array_push($width, $rand);
	echo $width[$i]." ";
}
echo "</p>";
echo "<p>";
for ($i=0; $i < 12; $i++) { 
	$rand = mt_rand(1,10);
	array_push($height, $rand);
	echo $height[$i]." ";
}
echo "</p>";
// print_r($length)."<br />";
// print_r($width)."<br />";
// print_r($height);

for ($i=0; $i < count($length); $i++) { 
	$volume = $length[$i]*$width[$i]*$height[$i];
	array_push($parallelepiped, $volume);
}
for ($i=0; $i < count($parallelepiped); $i++) { 
	echo $parallelepiped[$i]."<br />";
}


?>
</body>
</html>





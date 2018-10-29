<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<style type="text/css">
	p {
		margin: 10px 10px 20px 10px;
	}
</style>

<?php
echo "<p>";
$num1 = 0;
for ($i=1; $i < 6; $i++) { 
	$num1++;
	for ($j=0; $j < $i; $j++) { 
		echo $num1." ";
	}
	echo "<br>";
}
echo "</p>";
echo "<p>";
$num5 = 4;
for ($i=0; $i < 5; $i++) { 
	$num5++;
	for ($j=0; $j < 5-$i; $j++) { 
		echo $num5." ";
	}
	echo "<br>";
}
echo "</p>";
echo "<p>";
$num10 = 0;
for ($i=1; $i < 6; $i++) { 
	$num10+=10;
	for ($j=0; $j < $i; $j++) { 
		echo $num10." ";
	}
	echo "<br>";
}
echo "</p>";
echo "<p>";
$n = 0;
for ($i=0; $i < 5; $i++) { 
	$n+=5;
	for ($j=0; $j < 5-$i; $j++) { 
		echo $n." ";
	}
	echo "<br>";
}
echo "</p>";

?>
</body>
</html>





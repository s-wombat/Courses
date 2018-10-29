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
for ($i=0; $i < 4; $i++) { 
	for ($j=0; $j < 6; $j++) { 
		echo "5 ";
	}
	echo "<br>";
}
echo "</p>";
echo "<p>";
for ($i=0; $i < 4; $i++ ) { 
	for ($j=1; $j <= 10; $j++) { 
		echo $j.' ';
	}
	echo "<br>";
}
echo "</p>";
echo "<p>";
for ($i=0; $i < 40; $i+=10) { 
	for ($j=41; $j <= 60; $j++) { 
		echo $i+$j.' ';
	}
	echo "<br>";
}
echo "</p>";
?>
</body>
</html>





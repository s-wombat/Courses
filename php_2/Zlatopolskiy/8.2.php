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
for ($i=1; $i < 6; $i++) { 
	for ($j=0; $j < $i; $j++) { 
		echo "5 ";
	}
	echo "<br>";
}
echo "</p>";
echo "<p>";
for ($i=0; $i < 5; $i++) { 
	for ($j=0; $j < 5-$i; $j++) { 
		echo "1 ";
	}
	echo "<br>";
}
echo "</p>";

?>
</body>
</html>





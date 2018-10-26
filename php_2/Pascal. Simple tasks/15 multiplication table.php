<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<style type="text/css">
	tr {
		width: 100%;
		height: 40px;
	}
	td {
		border: 1px solid black;
		width: 40px;
		height: 40px;
	}
	.center {
		text-align: center;
	}
</style>

<table border="1">
<?php

for ($i=1; $i <= 10; $i++) { 
	echo "<tr>";
	for ($j=1; $j <= 10; $j++) { 
		echo "<td class='center'>".($i * $j)."</td>";

		}
	
	}
	echo "</tr>";




?>

</table>

</body>
</html>





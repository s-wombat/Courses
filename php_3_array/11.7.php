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
$arr = [];

echo "<p>";
for ($i=20; $i > 0; $i--) { 
	
	array_push($arr, $i);
}
print_r($arr);
echo "</p>";


?>
</body>
</html>





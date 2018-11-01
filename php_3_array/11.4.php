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
for ($i=0; $i < 12; $i++) { 
	$rand = mt_rand(163,190);
	array_push($arr, $rand);
}
print_r($arr);
echo "</p>";


?>
</body>
</html>





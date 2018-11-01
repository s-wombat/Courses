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
for ($i=0; $i < 20; $i++) { 
	$rand = mt_rand(50,100);
	array_push($arr, $rand);
}
print_r($arr);
echo "</p>";


?>
</body>
</html>





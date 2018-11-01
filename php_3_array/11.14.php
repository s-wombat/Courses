<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<?php
$a=isset($_GET['a']) ? $_GET['a'] : '';
$arr = [2,3,56,7,43,76,2345,7,245,5];
$arr = array_reverse($arr, true);
foreach ($arr as $key => $value) {
	echo $value.'<br>';
	
}


?>
</body>
</html>





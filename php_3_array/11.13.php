<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
		a:<input type="text" name="a"><br>
		<input type="submit">
	</form>	
	<p></p>

<?php
$a=isset($_GET['a']) ? $_GET['a'] : '';
$arr = [2,3,56,7,43,76,2345,7,245,5];

foreach ($arr as $key => $value) {
	if ($a == $key) {
	echo $value.'<br>';
	}
}


?>
</body>
</html>





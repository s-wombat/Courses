<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>


<?php

//возведение в степень $n числа $a
function pw($a,$n) 
{
	if($n > 0){
		return $a*pw($a, $n-1);
	}elseif($n < 0){
		return $a*pw(1/$a, -($n)); // отрицательная степень не решена
	}
	return 1;
}
echo(pw(3,-2));

?>
</body>
</html>




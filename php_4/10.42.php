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
    return 1/pw($a, abs($n));
	}
	return 1;
}
echo(pw(3,-2));

?>
</body>
</html>




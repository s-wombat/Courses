<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>


<?php

//возведение в степень $n числа $a
// function pw($a,$n) 
// {
// 	if($n > 0){
// 		return $a*pw($a, $n-1);
// 	}elseif($n < 0){
// 		return $a*pw(1/$a, -$n);
// 	}
// 	return 1;
// }
// echo(pw(3,-2));
$x=3;
$n=-2;
function rec($x,$n){
  if($n==0){
    return 1;
  }
  if($n > 0){
    return $x * rec($x,$n - 1);
  }
  if($n < 0){
    return $x * rec(1/$x, -$n);
  }
}
$y=rec($x,$n);
echo $y;
?>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<?php
$arr = [qwe,wer,ert,rty,tyu,yui,uio,iop,asd,sdf,dfg,fgh,ghj,hjk,jkl,zxc,xcv,cvb,vbn,bnm];
$even = [];
$odd = [];
foreach ($arr as $key => $value) {
	if ($key%2) {
		array_push($even, $value);
	} else {
		array_push($odd, $value);
	}
}
print_r($even);
print_r($odd);


?>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php

$car = [
	"Acura"=>['horse'=>200, 'price'=>40],
	"Daihatsu"=>['horse'=>78, 'price'=>15],
	"Datsun"=>['horse'=>50, 'price'=>10],
	"Hino"=>['horse'=>75, 'price'=>8],
	"Honda"=>['horse'=>150, 'price'=>7],
	"Infiniti"=>['horse'=>160, 'price'=>30],
	"Isuzu"=>['horse'=>100, 'price'=>12],
	"Lexus"=>['horse'=>190, 'price'=>50],
	"Mazda"=>['horse'=>66, 'price'=>25],
	"Mitsubishi"=>['horse'=>98, 'price'=>20],
	"Nissan"=>['horse'=>79, 'price'=>18],
	"Subaru"=>['horse'=>250, 'price'=>22],
	"Suzuki"=>['horse'=>40, 'price'=>24],
	"Toyota"=>['horse'=>150, 'price'=>30],
	"Yamaha"=>['horse'=>55, 'price'=>10],
	"ASL"=>['horse'=>20, 'price'=>10],
	"Dome"=>['horse'=>600, 'price'=>7],
	"Audi"=>['horse'=>100, 'price'=>35],
	"AWZ"=>['horse'=>500, 'price'=>12],
	"Barkas"=>['horse'=>400, 'price'=>35],
	"Bitter"=>['horse'=>10, 'price'=>4],
	"BMW"=>['horse'=>300, 'price'=>80],
	"Borgward"=>['horse'=>1000, 'price'=>33],
	"Büssing"=>['horse'=>2000, 'price'=>25],
	"DKW"=>['horse'=>60, 'price'=>99],
	"Glas"=>['horse'=>59, 'price'=>55],
	"Goliath"=>['horse'=>47, 'price'=>44],
	"Hansa"=>['horse'=>62, 'price'=>22],
	"Heinkel"=>['horse'=>47, 'price'=>37],
	"Horch"=>['horse'=>95, 'price'=>99]
];
$sum = 0;
foreach ($car as $key => $value) {
	foreach ($value as $k => $v) {
	if ($k=='horse' && $v > 100) {
			$sum += $car[$key]['price'];
		}	
	}
}
echo $sum;


?>
</body>
</html>





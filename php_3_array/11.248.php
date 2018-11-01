<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
$morning = [];
$evening = [];
for ($i=0; $i < 30; $i++) { 
	$rand = mt_rand(1,8);
	array_push($morning, $rand);
}
for ($j=0; $j < 30; $j++) { 
	$rand2 = mt_rand(1,8);
	array_push($evening, $rand2);
}
print_r($morning);
echo "<br />";
print_r($evening);
echo "<br />";

for ($i=0; $i < count($morning); $i++) { 
	switch ($morning[$i]) {
		case 1:
			$morning[$i] = "северный";
			break;
		case 2:
			$morning[$i] = "южный";
			break;
		case 3:
			$morning[$i] = "восточный";
			break;
		case 4:
			$morning[$i] = "западный";
			break;
		case 5:
			$morning[$i] = "северо-западный";
			break;
		case 6:
			$morning[$i] = "северо-восточный";
			break;
		case 7:
			$morning[$i] = "юго-западный";
			break;
		case 8:
			$morning[$i] = "юго-восточный";
			break;
	}
}
for ($i=0; $i < count($evening); $i++) { 
	switch ($evening[$i]) {
		case 1:
			$evening[$i] = "северный";
			break;
		case 2:
			$evening[$i] = "южный";
			break;
		case 3:
			$evening[$i] = "восточный";
			break;
		case 4:
			$evening[$i] = "западный";
			break;
		case 5:
			$evening[$i] = "северо-западный";
			break;
		case 6:
			$evening[$i] = "северо-восточный";
			break;
		case 7:
			$evening[$i] = "юго-западный";
			break;
		case 8:
			$evening[$i] = "юго-восточный";
			break;
	}
}
$day = [];
for ($i=0; $i < count($morning); $i++) { 
	$day[$i] = [$morning[$i], $evening[$i]];
}
print_r($day);
echo "<br />";

for ($i=0; $i < count($day); $i++) { 
	for ($j=0; $j < count($day[$i]); $j++) { 
		echo $day[$i][$j].'<br />';
	}
}

?>
</body>
</html>





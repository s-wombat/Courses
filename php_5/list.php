<?php 
 session_start();
require 'cart.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>list.php</title>
</head>
<body>
<table border="1" cellspacing="0">
	<tr>
		<th>Товар</th>
		<th>Количество</th>
		<th>Сумма</th>
		<th>Удалить</th>
	</tr>
	<?php 
		$cart = getCart();
		cartRecalc();
		foreach ($cart['items'] as $key=>$items) {
			echo '<tr><td>'.$items['name'].'</td><td>'.$items['quantity'].'</td><td>'.$items['price'].'</td><td><a href=/delete.php?id='.$key.'>Delete</a></td></tr>';
		}
	?>
</table>

<?php
$calc = $_SESSION['cart'];
echo "<p>К оплате с учетом скидки: ".$calc['sum']."</p>";
?>






</body>
</html>
<?php 
 session_start();
require 'cart.php';
// echo "Pay ".$cart['sum']."<br/>";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>list.php</title>
</head>
<body>
<pre>
<table border="1" cellspacing="0">
	<tr>
		<th>Товар</th>
		<th>Количество</th>
		<th>Сумма</th>
		<th>Удалить</th>
	</tr>
<?php 
$cart = $_SESSION['cart'];
// $cart = add();
// 
// $products = getProducts();

// cartRecalc();
foreach ($cart['items'] as $key=>$items) {
	echo '<tr><td>'.$items['name'].'</td><td>'.$items['quantity'].'</td><td>'.$items['price'].'</td><td><a href=/delete.php?id='.$key.'>Удалить</a></td></tr>';
}
var_dump($cart);
?>
</table>

<?php
$calc = $_SESSION['cart'];
echo "<p>К оплате с учетом скидки: ".$calc['sum']."</p>";
?>






</body>
</html>
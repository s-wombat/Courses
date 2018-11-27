<?php 
 session_start();
require 'cart.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>list.php</title>
</head>
<body>
<pre>
<hr><a href="add.php">Выбор товаров</a><hr>
<table border="1" cellspacing="0">
	<tr>
		<th>Товар</th>
		<th>Количество</th>
		<th>Сумма</th>
		<th>Удалить</th>
	</tr>
<?php 
$cart = new Cart();
if(!empty($cart->getItems())){
	foreach ($cart->getItems() as $key=>$items) {
		echo '<tr><td>'.$items['name'].'</td><td>'.$items['count'].'</td><td>'.$items['price'].'</td><td><a href=/delete.php?id='.$key.'>Удалить</a></td></tr>';
	}
}else {
	echo "<b style=\"color:red;\">Корзина пустая</b><br><br>";
}
?>
</table>

<?php
if($cart->getDiscount() > 0){
		echo "<p>К оплате с учетом скидки: ".$cart->getDiscount()."</p><hr>";
	}else {
		echo "<p>К оплате: ".$cart->getSum()."</p><hr>";
	}
var_dump($cart);
?>

</body>
</html>
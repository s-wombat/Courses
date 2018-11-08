<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
// Массив для корзины магазина
$cart=[];

for ($i=0; $i < mt_rand(1,10); $i++) { 
	$cart['sum'] = 0;
	$cart['all_quantity'] = 0;
	$cart['items'][$i]['id'] = mt_rand(1,100);// id товара
	$cart['items'][$i]['quantity'] = mt_rand(1,20);// количество товара в корзине
	$cart['items'][$i]['price'] = mt_rand(1,1000);// цена за единицу товара
}
for ($i=0; $i < count($cart['items']); $i++) { 
	$cart['sum'] += $cart['items'][$i]['price'];
	$cart['all_quantity'] += $cart['items'][$i]['quantity'];
}

// Функция пересчёта суммы за товар с учётом скидки
function sale_cart($sum, $all_quantity){
	$sale = 7;
	$discont = 10;
	if ($sum > 2000) {
		$sale *= $sum/100;
	} else {
		$sale = 0;
	}
	if ($all_quantity > 10) {
		$discont *= $all_quantity/100;
	} else {
		$discont = 0;
	}
	return $sale + $discont;
}
var_dump($cart);
echo "<p></p>";
echo "Ваша скидка - ".sale_cart($cart['sum'],$cart['all_quantity'])."<br>";
echo "<p></p>";

// Добавление товара в корзину
function cart_add(&$cart,$id,$quantity,$price){
	$cart['items'][] = ['id'=>$id, 'quantity'=>$quantity, 'price'=>$price];
	return $cart;
}
cart_add($cart,20,13,20);
var_dump($cart);
echo "<p></p>";

// Удаление товара из корзины
function cart_del(&$cart){
	array_splice($cart['items'], -1);
	return $cart;
}
cart_del($cart);
var_dump($cart);
echo "<p></p>";

// Изменение количества товара, лежащего в корзине	
function cart_change(&$cart,$new_quantity){
 	$cart['all_quantity'] = 0;
 	for ($i=0; $i < count($cart['items']); $i++) { 
 		$cart['items'][$i]['quantity'] = $new_quantity;
 		$cart['all_quantity'] += $cart['items'][$i]['quantity'];
 	}
 	return $cart;
}	
cart_change($cart,1);
var_dump($cart);

?>
</body>
</html>




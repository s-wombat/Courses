<?php 
session_start();
$_SESSION['cart'] = [];
if(!isset($_SESSION['cart'])){
	$_SESSION['cart']=['sum'=>0, 'items'=>[]];
}
$_SESSION['cart'] = $products;
	$products = [
					2=>[
						'name'=>'Samsung', 
						'price'=>233,
					],
					7=>[
						'name'=>'Xiaomi', 
						'price'=>333,
					],
					43=>[
						'name'=>'Asus', 
						'price'=>332,
					],
	];
$errors = [];
if(!empty($_POST)){
	if (isset($_POST['product']) && $_POST['product']!=0){
		$product = $_POST['product'];
	}else {
		$errors['product'] = 'Enter product <br/>';
	}
	if (isset($_POST['quantity']) && $_POST['quantity']!=0){
		$quantity = $_POST['quantity'];
	}else {
		$errors['quantity'] = 'Enter quantity <br/>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

var_dump($_POST['product']);

	function get_cart(){
		if(empty($errors)){
				$product = $products[$product];
				$_SESSION['cart']['sum'] += $products[$product]['price']*$quantity;
				$_SESSION['cart']['items'][] = ['name'=>$product['name'], 'quantity'=>$quantity];

		}
		return $_SESSION['cart'];
	}

	var_dump("<pre>",$_POST);
	?>






</body>
</html>


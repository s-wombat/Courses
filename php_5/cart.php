<?php 
session_start();
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart']=['sum'=>0, 'items'=>[]];
	}	
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
if(!empty($_GET)){
	if (isset($_GET['product']) && $_GET['product']!=0){
		$product = $_GET['product'];
	}else {
		$errors['product'] = 'Enter product <br/>';
	}
	if (isset($_GET['quantity']) && $_GET['quantity']!=0){
		$quantity = $_GET['quantity'];
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
	function get_cart(){
		if(empty($errors)){
			var_dump("<pre>",$products);// NULL
			foreach ($products as $key => $prod) {
				if ($key == $_GET['product']){
					$_SESSION['cart']['sum'] += $prod['price']*$quantity;
					$_SESSION['cart']['items'][] = ['name'=>$prod['name'], 'quantity'=>$quantity];
				}
			}
		}
		return $_SESSION['cart'];
	}
	var_dump("<pre>",$_GET);
?>






</body>
</html>


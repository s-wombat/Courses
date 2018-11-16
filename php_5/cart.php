<?php 
session_start();
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart']=['sum'=>0, 'items'=>[]];
	}	
function getProducts(){
 return [
		2=>[
			'name'=>'Samsung', 
			'price'=>2,
		],
		7=>[
			'name'=>'Xiaomi', 
			'price'=>3,
		],
		43=>[
			'name'=>'Asus', 
			'price'=>4,
		],
];
}

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
function getCart(){
	$products = getProducts();
	if(empty($errors)){
	$id = $_GET['product'];
	$quantity = $_GET['quantity'];
		$product = $products[$id];
		if($key == $_GET['product']){
			$quantity += $_SESSION['cart']['items'][$id]['quantity'];
		}
		$_SESSION['cart']['items'][$id] = ['name'=>$product['name'],'quantity'=>$quantity,'price'=>$product['price']];
}
		return $_SESSION['cart'];
}

	function  cartRecalc(){
		$sum = 0;
		$products = getProducts();
		$items = $_SESSION['cart']['items'];
		foreach ($items as $key => $value) {
			$sum += $products[$key]['price']*$items[$key]['quantity'];
		}
		if($sum>100){
			$sum *= 0.9;
		}
		return $_SESSION['cart']['sum'] = $sum;
	}

	function delete(){
		$cart = $_SESSION['cart'];
		foreach ($cart['items'] as $key=>$items) {
		unset($_SESSION['cart']['items'][$key]);
			$id = $_SESSION['cart']['items'][$key];
	}	
}

?>

</body>
</html>


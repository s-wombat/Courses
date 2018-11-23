<?php 
session_start();
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

function errors(){
$errors = [];
if(!empty($_GET)){
	if (isset($_GET['product']) && $_GET['product']!=0){
		$id = $_GET['product'];
	}else {
		echo 'Выберите товар<br />';
	}
	if (isset($_GET['quantity']) && $_GET['quantity']!=0){
		$quantity = $_GET['quantity'];
	}else {
		echo 'Введите количество товара';
	}
}
}

function getCart(){
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart']=['sum'=>0,'items'=>[]];
	}
}


function add($arr, $id, $quantity, $price){
	$products = getProducts();
	$arr = $_SESSION['cart'];
	// errors();
	// if(isset($id) && isset($quantity)){
		getCart();
		if(empty($arr[$items])){
			$arr['items'][] = ['id'=>$id,'quantity'=>$quantity,'price'=>$price*$quantity];
		}else {
			foreach ($arr['items'] as $key => $value) {
				if($key == $id){
					
					$arr['items'][$key]['quantity'] += $quantity;
					$arr['items'][$key]['price'] *= $arr['items'][$key]['quantity'];
				}else {
					$arr['items'][] = ['id'=>$id,'quantity'=>$quantity,'price'=>$price*$quantity];
				}
			}
		}
	// }
cartRecalc();
	// if(isset($id) && isset($quantity)){
	// 	$cart['sum'] = 	0;
	// 	$cart['items'][] = $_GET['product'];
	// 	$cart['quantity'] = $_GET['quantity'];
	// }
	return $_SESSION['cart'] = $arr;
	 // $arr;
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

function delete($arr, $id){
		$arr = $_SESSION['cart'];
		foreach ($arr['items'] as $key=>$items) {
			if($key == $id){
				unset($arr['items'][$key]);
			}
			
	}	
	cartRecalc();
	return $_SESSION['cart'] = $arr;	
}
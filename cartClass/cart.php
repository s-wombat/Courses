<?php 
session_start();

class Cart {
	const PRODUCTS =  [
		2=>[
			'name'=>'Samsung', 
			'price'=>22,
		],
		7=>[
			'name'=>'Xiaomi', 
			'price'=>33,
		],
		43=>[
			'name'=>'Asus', 
			'price'=>44,
		]
	];
	private $items, $sum, $discount, $count, $id;
	private $quantity = 0;
	private $arr, $price, $name;

	public function getProducts(){
		return $this::PRODUCTS;
	}
	public function errors(){
		// $errors = [];
		if(!empty($_GET)){
			if (isset($_GET['product']) && $_GET['product']!=0){
				$this->id = $_GET['product'];
			}else {
				return 'Выберите товар<br />';
			}
			if (isset($_GET['quantity']) && $_GET['quantity']!=0){
				$this->quantity = $_GET['quantity'];
			}else {
				return 'Введите количество товара';
			}
		}
	}
	public function getCart(){
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart']=['sum'=>0,'items'=>[]];
		}
	}
	private function setCount($id, $count){
		$products = $this->getProducts();
		$this->arr = $_SESSION['cart'];
		$this->name = $this::PRODUCTS[$id]['name'];
		$this->price = $this::PRODUCTS[$id]['price'];
		foreach ($this->arr['items'] as $key => $value) {
			if($value['id'] == $id){
				$this->arr['items'][$key]['count'] += $count;
			}else {
				$this->arr['items'][] = ['id'=>$id, 'name'=>$this->name,'count'=>$count,'price'=>$this->price*$count];
			}
		}
		
	}
	public function add($id, $count){
		$products = $this->getProducts();
		$this->name = $this::PRODUCTS[$id]['name'];
		$this->price = $this::PRODUCTS[$id]['price'];

		$this->getCart();
		$this->arr = $_SESSION['cart'];
		if (empty($this->arr['items'])) {
	        	$this->arr['items'][] = ['id'=>$id, 'name'=>$this->name,'count'=>$count,'price'=>$this->price*$count];
	    }else {
	     	$this->setCount($id, $count);
	    }
		return $_SESSION['cart'] = $this->arr;
	}	

	private function calc(){

	}
	private function setSum(){
		if($this->arr['cart']['sum']){
			$this->sum = $_SESSION['cart']['sum'];
		}else {
			$this->sum = 0;
		}
	}
	public function __construct(){}
	public function delete(){}
	public function getSum(){}
	public function getDiscount(){}
	public function getItems(){}
	public function setDiscount(){}
	public function setItems(){}
}

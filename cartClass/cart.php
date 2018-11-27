<?php 
session_start();

class Cart {
	const PRODUCTS =  [
		2=>[
			'name'=>'Xiaomi', 
			'price'=>10,
		],
		7=>[
			'name'=>'LG', 
			'price'=>20,
		],
		43=>[
			'name'=>'Asus', 
			'price'=>30,
		]
	];
	private $arr, $items, $id, $count, $sum, $discount, $name, $price; 

	public function __construct()
	{
		$this->arr = $_SESSION['cart'];//корзина
		$this->sum = $_SESSION['cart']['sum'];//сумма стоимости элементов корзины
		$this->items = $_SESSION['cart']['items'];//элементы корзины
	}
	public function __destruct()
	{
		$_SESSION['cart'] = $this->arr;
		$_SESSION['cart']['sum'] = $this->sum;//сумма стоимости элементов корзины
		$_SESSION['cart']['items'] = $this->items;//элементы корзины
		
	}

	public function errors($id, $count)
	{
		if (empty($id) || isset(static::PRODUCTS[$id])){
			return 'Выберите товар<br />';
		}
		 
		if (empty($count) || $count>0){
			return 'Введите количество товара';
		}
		setId($id);
		setCount($count);
	}

	public function add($id, $count)
	{
		$this->name = $this::PRODUCTS[$id]['name'];
		$this->price = $this::PRODUCTS[$id]['price'];
		if(isset($this->items[$id])){
			$this->items[$id]['count'] += $count;
			$this->items[$id]['price'] *= $count;
			$this->calc($this->items);
		}else {
			$this->items[$id] = ['name'=>$this->name,'count'=>$count,'price'=>$this->price*$count];
			$this->calc($this->items);
		}
	}	
	public function delete($id)
	{
		foreach ($this->items as $key=>$items) {
			if($key == $id){
				unset($this->items[$key]);
			}
		}
		$this->calc($this->items);
	}	

	private function calc($arr)
	{
		$discount = 0;
		foreach ($arr as $key => $value) {
			$sum += $value['price'];
		}
		if($sum > 2000){
			 $discount = $sum * 0.93;
		}
		$this->setSum($sum);
		$this->setDiscount($discount);
	}

	public function setArr($arr){
		$this->arr = $arr;
	}
	public function setId($id){
		$this->id = $id;
	}
	// private function setCount($id, $count){}
	public function setCount($count){
		$this->count = $count;
	}
	public function setSum($sum){
		$this->sum = $sum;
	}
	public function setDiscount($discount){
		$this->discount = $discount;
	}
	public function setItems($items){
		$this->items = $items;
	}
	

	public function getProducts(){
		return $this::PRODUCTS;
	}	
	public function getArr(){
		return $this->arr;
	}
	public function getId(){
		return $this->id;
	}
	public function getCount(){
		return $this->count;
	}
	public function getSum(){
		return $this->sum;
	}
	public function getDiscount(){
		return $this->discount;
	}
	public function getItems(){
		return $this->items;
	}
}

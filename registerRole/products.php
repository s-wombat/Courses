<?php 
session_start();
	$products = [
		['id'=>1,'food'=>'Огурцы', 'about'=>'Петров', 'count'=>'10', 'cost'=>'123']
		// ['id'=>2,'food'=>'Помидоры', 'about'=>'Пупкин', 'count'=>'11', 'cost'=>'456'],
		// ['id'=>3,'food'=>'Капуста', 'about'=>'Наибатор', 'count'=>'13', 'cost'=>'789'],
		// ['id'=>4,'food'=>'Бананы', 'about'=>'Manager', 'count'=>'14', 'cost'=>'987'],
		// ['id'=>5,'food'=>'Груши', 'about'=>'Manager', 'count'=>'15', 'cost'=>'654'],
		// ['id'=>6,'food'=>'Дыни', 'about'=>'Manager', 'count'=>'16', 'cost'=>'321']
	];
	
class Product {
	private $food, $about, $coun, $cost, $products;

 	public function __construct($food, $about, $coun, $cost, $products)
 	{
 		$this->food = isset($food) ? $food : null;
 		$this->about = isset($about) ? $about : null;
 		$this->coun = isset($coun) ? $coun : null;
 		$this->cost = isset($cost) ? $cost : null;
 		$_SESSION['products'] = $products;
 		$this->products = $_SESSION['products'];
 	}
 	public function change(){
 		foreach ($this->products as $key => $value) {
			if(isset($this->food)){
				$value['food'] = $this->food;
			}
			if(isset($this->about)){
				$value['about'] = $this->about;
			}
			if(isset($this->count) && $this->count > 0){
				$value['count'] = $this->count;
			}
			if(isset($this->cost) && $this->cost > 0){
				$value['cost'] = $this->cost;
			}
			var_dump($_SESSION['products'][0]['cost']);
 		}

 		// return $_SESSION['products'];
 	}
 	// public function setProd(){
 	// 	 $this->products = $_SESSION['products'];
 	// }
 	public function __destruct()
 	{
 		$_SESSION['products'] = $this->products;
 	}
}
var_dump($products)."<br>";

var_dump($_SESSION['products'][0]['cost']);
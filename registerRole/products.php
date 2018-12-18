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

 	public function __construct($products, $data)
 	{
 		$this->food = isset($data['food']) ? $data['food'] : null;
 		$this->about = isset($data['about']) ? $data['about'] : null;
 		$this->count = isset($data['count']) ? $data['count'] : null;
 		$this->cost = isset($data['cost']) ? $data['cost'] : null;
 		$_SESSION['products'] = $products;
 	}

 	public function changeFood(){
 		if(isset($this->food)){
			$_SESSION['products']['food'] = $this->food;
		}
	}
	public function changeAbout(){
 		if(isset($this->about)){
			$_SESSION['products']['about'] = $this->about;
		}
	}
	public function changeCount(){
 		if(isset($this->count)){
			$_SESSION['products']['count'] = $this->count;
		}
	}
	public function changeCost(){
 		if(isset($this->cost)){
			$_SESSION['products']['cost'] = $this->cost;
		}
	}
}
echo "<pre>";
var_dump($products)."<br>";
echo "<br>";
var_dump($_SESSION['products']);
// var_dump($_SESSION['products']);
// var_dump($_SESSION['products']['count']);
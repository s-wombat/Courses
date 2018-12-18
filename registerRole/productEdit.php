<?php 
session_start();
require_once 'user.php';
require_once 'index.php';
require_once 'products.php';

$admin = new Admin($users, $_POST);
$salesManager = new SalesManager($users, $_POST);
$stockManager = new StockManager($users, $_POST);
$contentManager = new ContentManager($users, $_POST);
$product = new Product($products, $_POST);
if($_POST['change']){
	switch (true) {
		case $user->productEdit():
			echo "вы не можете редактировать ничего";
			break;
		case $admin->productEdit():
			echo "вы можете редактировать все";	
			$product->changeFood();
			$product->changeAbout();
			$product->changeCount();
			$product->changeCost();
			break;
		case $salesManager->productEdit():
			echo "вы можете редактировать цену товара";	
			$product->changeCost();
			break;
		case $stockManager->productEdit():
			echo "вы можете редактировать только количество товара на складе";	
			$product->changeCount();
			break;
		case $contentManager->productEdit():
			echo "вы можете редактировать только описание товара и его название";	
			$product->changeFood();
			$product->changeAbout();
			break;
	}
}

?>
 <div>
 	<form method="POST">
 		<br />
 		<legend>Редактирование товаров</legend>
 		<label for="id">Id товара:
			<input type="text" name="id">
 		</label><br />
 		<label for="food">Название товара:
			<input type="text" name="food">
 		</label><br />
 		<label for="about">Описание товара:
			<input type="text" name="about">
 		</label><br />
 		<label for="count">Количество:
			<input type="number" name="count">
 		</label><br />
 		<label for="cost">Цена:
			<input type="number" name="cost">
 		</label><br />
 		<input type="submit" name="change" value="Изменить">
 	</form>
 </div>

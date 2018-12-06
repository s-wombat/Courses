<?php 
session_start();
require_once 'user.php';
require_once 'index.php';
require_once 'products.php';
// $user = new User($users, $_POST);
$admin = new Admin($users, $_POST);
$salesManager = new SalesManager($users, $_POST);
$stockManager = new StockManager($users, $_POST);
$contentManager = new ContentManager($users, $_POST);
$product = new Product($_POST['food'], $_POST['about'], $_POST['count'], $_POST['cost'], $products);
$product->change();
if($_POST['change']){
	switch (true) {
		case $user->productEdit():
			echo "вы не можете редактировать ничего";
			break;
		case $admin->productEdit():
			echo "вы можете редактировать все";	
			break;
		case $salesManager->productEdit():
			echo "вы можете редактировать цену товара";	
			break;
		case $stockManager->productEdit():
			echo "вы можете редактировать только количество товара на складе";	
			break;
		case $contentManager->productEdit():
			echo "вы можете редактировать только описание товара и его название";	
			break;
	}
}

?>
 <div>
 	<form method="POST">
 		<br />
 		<legend>Редактирование товаров</legend>
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

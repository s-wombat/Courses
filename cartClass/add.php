<?php 
session_start();
require 'cart.php';
$cart = new Cart();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<style type="text/css">
	form {
		display: flex;
	    align-items: flex-start;
	    justify-content: flex-start;
	    flex-direction: column;
	}
	.errors {
		font-weight: 600;
		color: red;
	}
</style>
	<pre>
		<div>
		<a href="list.php">Корзина</a><hr>
			<form action="" method="GET" enctype="multipart/form-data">
				<p class="errors">
					 <?php echo $cart->errors($_GET['product'], $_GET['count']); ?>
				</p>

				<select name="product">
					<option></option>
					<?php 
					$products = $cart->getProducts();

					foreach ($products as $key=>$product){
						echo '<option value="'.$key.'">'.$product['name'].' '.$product['price'].' grn</option>';
					}

					?>
				</select>

				<p>Количество товара:</p>
				<input type="text" name="count">
				<input type="submit" value="submit">
			</form>
		</div>
<?php
if(!empty($_GET['product']) && $_GET['count'] > 0) {
	$cart->add($_GET['product'], $_GET['count']);
}

var_dump($_SESSION['cart']);
var_dump($_SESSION['cart']['sum']);
var_dump($_SESSION['cart']['items']);
var_dump($_GET['product']);

?>

	</body>
	</html>
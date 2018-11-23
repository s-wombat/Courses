<?php 
session_start();
require 'cart.php';
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
			<form action="" method="GET" enctype="multipart/form-data">
				<p class="errors">
					<?php errors(); ?>
				</p>

				<select name="product">
					<option>Выбор товара</option>
					<?php 
					$products = getProducts();
					foreach ($products as $key=>$product){
						echo '<option value="'.$key.'">'.$product['name'].' '.$product['price'].' grn</option>';
					}

					?>
				</select>

				<p>Количество товара:</p>
				<input type="text" name="quantity">
				<input type="submit" value="submit">
			</form>
		</div>
		<?php
		if(!empty($_GET['product']) && $_GET['quantity'] > 0) {
		
		$cart = add($cart, $_GET['product'], $_GET['quantity'],$_GET['product']['price']);
		// var_dump(getCart());
	}
var_dump($_SESSION['cart']);
var_dump($_GET['product']);

		?>

	</body>
	</html>
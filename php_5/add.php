<?php 
session_start();
require 'cart.php';
?>
<!DOCTYPE html>
<html lang="en">
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
</style>
	<pre>
		<div>
			<form action="" method="GET" enctype="multipart/form-data">
				<?php
				if (isset($errors['product'])) {
					echo $errors['product'];
				}
				?>
				<select name="product">
					<option>Select product</option>
					<?php 
					$products = getProducts();
					foreach ($products as $key=>$product){
						echo '<option value="'.$key.'">'.$product['name'].' '.$product['price'].' grn</option>';
					}
					?>
				</select>
				<?php
				if (isset($errors['quantity'])) {
					echo $errors['quantity'];
				}
				?>
				<p>Quantity product:</p>
				<input type="text" name="quantity">
				<input type="submit" value="submit">
			</form>
		</div>
		<?php
		var_dump(getCart());
		?>

	</body>
	</html>
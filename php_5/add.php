<?php 
session_start();
include 'cart.php';
var_dump($_SESSION['cart']);
var_dump($product);

var_dump($products[$product]);
// var_dump($product['name']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	get_cart();
		foreach ($_SESSION['cart']['items'] as $items) {
			echo $items['name']." ".$items['quantity'];
		}

	?>


	<div>
	К оплате <?php echo $_SESSION['cart']['sum'];?>
		<form action="" method="POST" enctype="multipart/form-data">
		<?php
			if (isset($errors['product'])) {
				echo $errors['product'];
			}
		?>
			<select name="product">
				<option>Выберите товар</option>
					<option name="samsung">Samsung</option>
					<option name="xiaomi">Xiaomi</option>
					<option name="asus">Asus</option>
			</select>
			<?php
			if (isset($errors['quantity'])) {
				echo $errors['quantity'];
			}
		?>
		Количество товара:
			<input type="text" name="quantity">
			<input type="submit" name="">
		</form>
	</div>
<?php






?>

</body>
</html>
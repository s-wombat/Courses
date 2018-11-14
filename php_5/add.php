<?php 
session_start();
include 'cart.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
	$cart = get_cart();
	foreach ($cart['items'] as $items) {
		echo $items['name']." ".$items['quantity'];
		echo "Pay".$cart['sum'];
	}

	?>
	<div>
		<form action="" method="GET" enctype="multipart/form-data">
		<?php
			if (isset($errors['product'])) {
				echo $errors['product'];
			}
		?>
<select name="product">
	<option>Select product</option>
	<?php foreach ($products as $key=>$product){
		echo '<option value="'.$key.'" name="'.$product['name'].'">'.$product['name'].' '.$product['price'].' grn</option>';
	}
	?>
</select>
			<?php
			if (isset($errors['quantity'])) {
				echo $errors['quantity'];
			}
		?>
		Quantity product:
			<input type="text" name="quantity">
			<input type="submit" name="">
		</form>
	</div>
<?php
// echo $products[$GET['product']];
// var_dump($products[$GET['product']]);
var_dump(get_cart());




?>

</body>
</html>
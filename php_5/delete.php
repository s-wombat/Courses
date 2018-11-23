<?php 
 session_start();
 header("Location:list.php");
require 'cart.php';
$cart = $_SESSION['cart'];
delete($cart, $_GET['product']);


?>

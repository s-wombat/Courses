<?php 
 session_start();
 header("Location:list.php");
require 'cart.php';
$cart = new Cart();
$cart->delete($_GET['product']);



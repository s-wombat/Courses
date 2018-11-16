<?php 
 session_start();
 header("Location:list.php");
require 'cart.php';

delete();
cartRecalc();

?>

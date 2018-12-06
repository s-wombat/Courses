<?php 
header('Content-Type: text/html; charset=utf-8');
session_start();
require_once 'user.php';

$user = new User($users, $_POST);

if ($_POST) {
	if($user->validate()){
		if(!$user->auth($_POST['email'], $_POST['password'])){
			echo "неправильный пароль или Email";
		}
	}else {
		echo "Заполните все поля формы<br>";
	}
	$user->logout($_POST['log']);
}
if($user->maybe()){
	echo "Привет, ".$user->getName()." <br />";
	require_once 'productEdit.php';
?>
<form method="POST">
	<input type="submit" name="log" value="Выйти">
</form>
<?php

}else{

?>
	<pre>
		<form method="POST">
		    <input type="email" name="email" placeholder="Enter your Email" /><br/><br/>
		    <input type="password" name="password" placeholder="Enter your Password" /><br/><br/>
		    <input type="submit"/>
		</form>
<?php
}
var_dump($_SESSION['id']);
var_dump($_SESSION['authoris']);
?>

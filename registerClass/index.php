<?php 
session_start();
require_once 'user.php';
$user = new User($users, $_POST);
if ($_POST) {
	if($user->validate()){
		echo "ok";
		$user->searchUser();
	}else {
		echo "Заполните все поля формы";
	}
	$user->logout();
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<pre>
		<form method="POST" action="user.php">
		    Email: <input type="email" name="email" /><br/><br/>
		    Password: <input type="password" name="password" /><br/><br/>
		    <input type="submit"/>
		</form>
		<form method="POST">
       		<input type="submit" name="log" value="Выйти">
       	</form>

<?php
var_dump($user->searchUser());

// var_dump($user->users);
var_dump($_SESSION['id']);
echo $_POST['email'];
?>

</body>
</html>
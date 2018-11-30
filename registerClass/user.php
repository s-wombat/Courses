<?php 
 session_start();
require 'index.php';

	$users = [
		['id'=>1,'name'=>'Василий', 'surname'=>'Петров', 'email'=>'vasya-petya@gmail.com', 'password'=>'123'],
		['id'=>2,'name'=>'Вася', 'surname'=>'Пупкин', 'email'=>'vasya-naibator@gmail.com', 'password'=>'456'],
		['id'=>3,'name'=>'Петя', 'surname'=>'Наибатор', 'email'=>'naibator@gmail.com', 'password'=>'789']
	];

 class User
 {
 	private $name, $surname, $email, $password, $arrUser, $users;

 	public function __construct($users, $data)
 	{
 		$this->email = isset($data['email']) ? $data['email'] : null;
 		$this->password = isset($data['password']) ? $data['password'] : null;
 	}	
 	public function validate()
	{
    	return !empty($this->email) && !empty($this->password);
	}

	public function searchUser()
	{
		if($this->validate()){
			foreach ($users as $key => $value) {//Warning: Invalid argument supplied for foreach() in G:\OSPanel\domains\registerClass\user.php on line 28
				if ($value['email'] == $this->email){
					$this->arrUser = $value;
					$this->searchPass();
				}else {
					echo "такого юзера в базе нет";
					 // header("Location:register.php");
				}
			}
		}
	}

	public function searchPass()
	{
		if($this->password == $this->arrUser['password']){
 				$_SESSION['id'] = $this->arrUser['id'];
 				return true;
	 	}else {
	 			echo "Не верный пароль";
	 			return false;
	 		}
	}

	public function logout()
	{
        if(isset($_POST['log'])){
         	unset($_SESSION['id']);
        }else{
        	$_SESSION['id'] = $this->arrUser['id'];
        }
    }
		

}

// По умолчанию сессия длится, пока пользователь не закроет окно браузера, и тогда она загибается автоматически. Но если вы хотите принудительно завершить сессию, её всегда можно замочить таким образом:	session_destroy(); 
 //ru.html.net/tutorials/php/lesson12.php
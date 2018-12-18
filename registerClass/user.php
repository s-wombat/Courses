<?php 
header('Content-Type: text/html; charset=utf-8');
 session_start();
	$users = [
		['id'=>1,'name'=>'Василий', 'surname'=>'Петров', 'email'=>'vasya-petya@gmail.com', 'password'=>'123'],
		['id'=>2,'name'=>'Вася', 'surname'=>'Пупкин', 'email'=>'vasya-naibator@gmail.com', 'password'=>'456'],
		['id'=>3,'name'=>'Петя', 'surname'=>'Наибатор', 'email'=>'naibator@gmail.com', 'password'=>'789']
	];
class User
 {
 	private $email, $password;
 	private $users, $id, $name, $surname, $emailUsers, $passUsers;
 	public function __construct($users, $data)
 	{
 		$this->email = isset($data['email']) ? $data['email'] : null;
 		$this->password = isset($data['password']) ? $data['password'] : null;
 		foreach ($users as $key => $value) {
 			if($this->email == $value['email'] && $this->password == $value['password']){
	 			$this->id = $value['id'];
	 			$this->emailUsers = $value['email'];
	 			$this->passUsers = $value['password'];
	 			$this->name = $value['name'];
	 			$this->surname = $value['surname'];
 			}
 		}		
 	}	
 	public function validate()
	{
    	return !empty($this->email) && !empty($this->password);
	}
	public function maybe() 
	{
	        if (isset($_SESSION["authoris"])) {
	            return $_SESSION["authoris"]; 
	        }
	        else return false;
	}
	public function auth()
	{
		if($this->validate()){
			if($this->emailUsers == $this->email && $this->password == $this->passUsers){
				$_SESSION["authoris"] = true;
				$_SESSION['id'] = $this->id;
				$_SESSION['name'] = $this->name;
				$_SESSION['surname'] = $this->surname;
				return true;
			}else{
				$_SESSION["authoris"] = false;
				return false;
			} 
		}		
	}
	public function getName()
	{
		if($this->maybe()){
			return $_SESSION['name']." ".$_SESSION['surname'];
		}
	}
	public function logout($remove)
	{
        if(isset($remove)){
         	unset($_SESSION['authoris']);
        }
    }
		
}
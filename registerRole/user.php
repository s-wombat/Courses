<?php 
header('Content-Type: text/html; charset=utf-8');
 session_start();
	$users = [
		['id'=>1,'name'=>'Вася', 'surname'=>'Петров', 'email'=>'vasya@i.ua', 'password'=>'123', 'status'=>'1'],
		['id'=>2,'name'=>'Петя', 'surname'=>'Пупкин', 'email'=>'petya@i.ua', 'password'=>'456', 'status'=>'1'],
		['id'=>3,'name'=>'Admin', 'surname'=>'Наибатор', 'email'=>'admin@i.ua', 'password'=>'789', 'status'=>'2'],
		['id'=>4,'name'=>'Sales', 'surname'=>'Manager', 'email'=>'sales@i.ua', 'password'=>'987', 'status'=>'3'],
		['id'=>5,'name'=>'Stock', 'surname'=>'Manager', 'email'=>'stock@i.ua', 'password'=>'654', 'status'=>'4'],
		['id'=>6,'name'=>'Content', 'surname'=>'Manager', 'email'=>'content@i.ua', 'password'=>'321', 'status'=>'5']
	];
interface userInterface {
 	const USER = 1; //не может редактировать ничего
    const ADMIN = 2; //Админ - может редактировать все
    const SALES_MANAGER = 3; //может редактировать цену товара
    const STOCK_MANAGER = 4; //может редактировать только количество товара на складе
    const CONTENT_MANAGER = 5; //может редактировать только описание товара и его название
 	public function productEdit();
 }
class User implements UserInterface
 {
 	private $email, $password;
 	private $users, $id, $name, $surname, $emailUsers, $passUsers, $status;

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
	 			$this->status = $value['status'];
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
			if($this->emailUsers == $this->email && $this->passUsers == $this->password){
				$_SESSION["authoris"] = true;
				$_SESSION['id'] = $this->id;
				$_SESSION['name'] = $this->name;
				$_SESSION['surname'] = $this->surname;
				$_SESSION['status'] = $this->status;
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
    public function productEdit(){
    	if($_SESSION['status'] == UserInterface::USER){
    		return true;
    	}
    	else return false;
    }
}

class Admin extends User implements UserInterface
{
	public function productEdit(){
    	if($_SESSION['status'] == UserInterface::ADMIN){
    		return true;
    	}
    	else return false;
    }
}
class SalesManager extends User implements UserInterface
{
	public function productEdit(){
    	if($_SESSION['status'] == UserInterface::SALES_MANAGER){
    		return true;
    	}
    	else return false;
    }
}
class StockManager extends User implements UserInterface
{
	public function productEdit(){
    	if($_SESSION['status'] == UserInterface::STOCK_MANAGER){
    		return true;
    	}
    	else return false;
    }
}
class ContentManager extends User implements UserInterface
{
	public function productEdit(){
    	if($_SESSION['status'] == UserInterface::CONTENT_MANAGER){
    		return true;
    	}
    	else return false;
    }
}


<?php
session_start();

class Connection{

	public $host="localhost";
	public $user="root";
	public $password="";
	public $db_name="phpportfolio";

	public $conn;

	public function __construct(){
		$this->conn=mysqli_connect($this->host,$this->user,$this->password,$this->db_name);
	}

}

class Register extends Connection{
	public function registration($name,$username,$email,$password){
		$duplicate=mysqli_query($this->conn, "SELECT * FROM sign  Where username='$username' Or email='$email' ");
		if(mysqli_num_rows($duplicate)>0){
			return "<h1 style='color:red'>Bu Fieldler Artiq istifade Olunub</h1>";
		}
		else{
			if($name!="" || $username!="" || $email!="" || $password!=""){
				$query="INSERT INTO `sign`(`id`, `name`, `username`, `email`, `pass`) VALUES (NULL,'$name','$username','$email','$password')";
				mysqli_query($this->conn,$query);
				return 1;
			}
			else{
				return 10;
			}
			
		}
	}
}

class Login extends Connection{
	public function login($username, $email, $password) {
		$result = mysqli_query($this->conn, "SELECT * FROM `sign` WHERE username='$username' OR email='$email' OR pass='$password'");
		$row=mysqli_fetch_assoc($result);

		if(mysqli_num_rows($result)>0){
			if($password==$row['pass']){
				$this->id=$row['id'];
				return 1;
			}
		}
	 }
	public function userId(){
		return $this->id;
	} 
}

class Select extends Connection{
	public function selectUser($id){
		$result=mysqli_query($this->conn,"SELECT * FROM `sign` WHERE `id`='$id'");
		return mysqli_fetch_assoc($result);
	}
}

class Name extends Connection{
	public function name($id){
		$result=mysqli_query($this->conn,"SELECT * FROM `sign` WHERE `id`='$id'");
		$row=mysqli_fetch_assoc($result);

		return $row['name'];
	}
}
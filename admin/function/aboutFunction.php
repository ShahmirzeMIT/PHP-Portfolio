<?php
require('conn.php');

class Add extends Connection{
	public function add($name,$street,$phone,$email,$text){
		if($name!="" || $street!="" || $phone!="" || $email!="" || $text!=""){
			$query = "INSERT INTO `about`(`id`, `name`, `street`, `phone`, `email`, `text`) VALUES (Null,'$name','$street','$phone','$email','$text')";
			 mysqli_query($this->conn, $query);

			 return 1;
		}else{
			return 10;
		}
	}
}
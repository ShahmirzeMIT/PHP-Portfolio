<?php

require('conn.php');

class Add extends Connection{
	public function add($firstText,$secondText){
		if($firstText!="" || $secondText!=""){
			$query = "INSERT INTO `interest`(`id`, `firstText`, `secondText`) VALUES (Null,'$firstText','secondText')";
			 mysqli_query($this->conn, $query);
			 return 1;
		}else{
			return 10;
		}
	}
}
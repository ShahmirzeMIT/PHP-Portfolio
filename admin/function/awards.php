<?php

require('conn.php');

class Add extends Connection{
	public function add($Text){
		if($Text!=""){
			$query = "INSERT INTO `awards`(`id`, `text`) VALUES (NULL,'$text')";
			 mysqli_query($this->conn, $query);
			 return 1;
		}else{
			return 10;
		}
	}
}
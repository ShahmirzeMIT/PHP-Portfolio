<?php

require('conn.php');

class Add extends Connection{
	public function add($head,$date,$name,$text){
		if($head!="" || $date!="" || $name!=""  || $text!=""){
			$query = "INSERT INTO `education`(`id`, `head`, `date`, `name`, `text`) VALUES (Null,'$head','$date','$name','$text')";
			 mysqli_query($this->conn, $query);
			 return 1;
		}else{
			return 10;
		}
	}
}
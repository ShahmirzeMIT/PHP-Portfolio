<?php
class Update{
	private $connection;
	public function __construct($connection){
		$this->connection=$connection;
	}
	
	public function updateAbout($id,$name,$street,$phone,$email,$text){
		$query="UPDATE `about` SET `name`='$name',`street`='$street',`phone`='$phone',`email`='$email',`text`='$text' WHERE `id`='$id' ";
		$result=$this->connection->conn->query($query); // Fixed the query execution here
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
}
?>

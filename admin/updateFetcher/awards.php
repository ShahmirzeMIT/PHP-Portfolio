<?php
class Update{
	private $connection;
	public function __construct($connection){
		$this->connection=$connection;
	}
	
	public function updateAbout($id,$text){
		$query="UPDATE `awards` SET `text`='$text' WHERE `id`='$id' ";
		$result=$this->connection->conn->query($query); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
}
?>

<?php
class Update{
	private $connection;
	public function __construct($connection){
		$this->connection=$connection;
	}
	
	public function updateAbout($id,$head,$date,$name,$text){
		$query="UPDATE `education` SET `head`='$head',`date`='$date',`name`='$name',`text`='$text' WHERE `id`='$id' ";
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

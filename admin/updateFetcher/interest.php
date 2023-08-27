<?php
class Update{
	private $connection;
	public function __construct($connection){
		$this->connection=$connection;
	}
	
	public function updateAbout($id,$firstText,$secondText){
		$query="UPDATE `interest` SET `firstText`='$firstText',`secondText`='$secondText' WHERE `id`='$id' ";
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

<?php
class showUpdate{
	private $connection;

	public function __construct($connection){
		$this->connection=$connection;
	}

	public function show($id){
		$query="SELECT * FROM `experience` WHERE `id`='$id'";
		$result = $this->connection->conn->query($query);

		$date=array();
		if($result->num_rows>0){
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			 }
		}
		return $data;
	}
}

<?php
class DataFetcherAwards{
	private $connection;
 
	public function __construct($connection) {
	    $this->connection = $connection;
	}
 
	public function getAllAwardsData() {
	    $query = "SELECT * FROM `awards`";
	    $result = $this->connection->conn->query($query);
	    
	    $data = array();
	    if ($result->num_rows > 0) {
		   while ($row = $result->fetch_assoc()) {
			  $data[] = $row;
		   }
	    }
	    return $data;
	}
 }
 
<?php 

include_once("constants.php");

	class Region{
		public $state_id;
		public $statename;
		public $lgaid;
		public $lganame;
		public $conn;

		public function __construct(){
			$this->conn = new MySQLi(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);

			if($this->conn->connect_error){
				die("connection Failed: ".$this->conn->connect_error);
			}
		}
		//begin getstates method

		function getStates(){
			$statement = $this->conn->prepare("SELECT * FROM state");
			//execute

			$statement->execute();

			//get result

			$result = $statement->get_result();

			//fetct

			$data = array();

			if($result->num_rows > 0){
			while ($row = $result->fetch_assoc()){
				$data[] = $row;
			}
			}
			return $data;
		}
		//end get state method 

		//begin get lga
			function getLga($stateid){
				//prepare

				$statement = $this->conn->prepare("SELECT * FROM lga WHERE state_id = ?");

				//bind 

				$statement->bind_param("i",$stateid);
				//execute

				$statement->execute();

				$result = $statement->get_result();

				$records = array();
				if($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()){
						$records[] = $row;
					}
				}
				return $records;
			}
		//end get lga 
	}

?>
<?php 
	include_once "constants.php";

	class Dashuser{
		public $dbconn;

		function __construct(){
			$this->dbconn = new Mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASENAME);
			if($this->dbconn->connect_error){
				die('connection Failed:'.$this->dbconn->connect_error);

			}
		}
		//begin insert book order

		//end insert end book order

		//fetch customer

		//end fetch customer

		//fetch order details

		//end order details

		//fetch logistic company

		//end logistic company

	}
 ?>